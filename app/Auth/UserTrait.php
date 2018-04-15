<?php
namespace App\Auth;

use App\Model\File;
use App\Model\User;
use App\Model\Address;
use App\Util\RandomNumber;
use App\Notifications\UserRegistered;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;

/**
 * Description of UserTrait
 *
 * @author methu
 */
trait UserTrait {
    
    use ShopTrait;
    
    public function register(array $raw) {
        if ($this->getValueIfExist($raw, 'id')) {
            return $this->updateUser($raw, User::findOrFail($raw['id']));
        } else {
            $data = $this->makeUserPassword($raw);
            $this->validator($data)->validate();
            event(new Registered($user = $this->createUser($data)));
            return $user;
        }
        
    }

    /**
     * create new user
     * @param array $data to save
     * @return User created user
     */
    protected function createUser(array $data) {
        $user= User::create([
                    'name' => $this->getValueIfExist($data, 'name'),
                    'email' => $this->getValueIfExist($data, 'email'),
                    'phone' => $this->getValueIfExist($data, 'phone'),
                    'gender' => $this->getValueIfExist($data, 'gender'),
                    'type' => $this->getValueIfExist($data, 'type'),
                    'identity'=>$this->getValueIfExist($data, 'identity'),
                    'status'=>$this->getValueIfExist($data, 'status'),
                    'image_id'=>$this->getValueIfExist($data, 'image_id'),
                    'registration' => $this->getValueIfExist($data, 'registration'),
                    'verification'=>RandomNumber::verificationCode(),
                    'status' => 0,
                    'type' => 0,
                    'password' => bcrypt($this->getValueIfExist($data, 'password'))
        ]);
        $this->saveUserImage($data, $user);
        $this->saveUserAddress($data, $user);
        $this->createWallet($user);
        $user->save();
        $this->createUserShop($user);
        $user->notify(new UserRegistered($user));
        return $user;
    }
    
    /**
     * update existing user 
     * @param array $data to update user with
     * @param User $user to update
     * @return User updated user
     */
    protected function updateUser(array $data, User $user) {
        $user->update([
                    'name' => $this->getValueIfExist($data, 'name'),
                    'email' => $this->getValueIfExist($data, 'email'),
                    'phone' => $this->getValueIfExist($data, 'phone'),
                    //'gender' => $this->getValueIfExist($data, 'gender'),
                    //'type' => $this->getValueIfExist($data, 'type'),
                    'registration' => $this->getValueIfExist($data, 'registration'),
                    //'identity'=>$this->getValueIfExist($data, 'identity'),
                    //'status'=>$this->getValueIfExist($data, 'status'),
                    'image_id'=>$this->getValueIfExist($data, 'image_id'),
        ]);
        $this->saveUserImage($data, $user);
        $this->saveUserAddress($data, $user);
        $user->save();
        return $user;
    }
    
   /**
    * check if user password is provided and create one if not given
    * @param array $data to check for password in
    * @return array data 
    */
    private function makeUserPassword(array $data) {
        $password = $this->getValueIfExist($data, 'password');
        if (!$password) {
            $password = md5(rand(1, 10000));
            $data['password'] = $password;
            $data['password-confirm'] = $password;
        }
        return $data;
    }
    
    /**
     * set user image
     * @param array $data with data
     * @param User $user user to set image
     * @return User updated user
     */
    protected function saveUserImage(array $data, User $user) {
        if ($this->getValueIfExist($data, 'image')) {
            $image = File::find($this->getValueIfExist($data, 'image')['id']);
            $user->image()->associate($image);
        }
        return $user;
    }
    
    /**
     * set user address
     * @param array $data with data
     * @param User $user user to set address
     * @return User updated user
     */
    protected function saveUserAddress(array $data, User $user) {
        if ($this->getValueIfExist($data, 'address')) {
            $id = 0;
            if (isset($data['address']['id'])) {
                $id = $data['address']['id'];
            }
            $address = Address::updateOrCreate([
                'id' => $id
            ], $data['address']);
            $user->address()->associate($address);
        }
        return $user;
    }
    
    /**
     * create user data validator
     * @param array $data to validate
     * @return Validator to validate the given info
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    //'phone' => 'string|min:7|max:20|unique:users',
                    'password' => 'required|string|min:6|confirmed',
        ]);
    }
    
    /**
     * get array value if it exist
     * @param array $data list to check
     * @param string $name valuable key name
     * @return mixed value
     */
    protected function getValueIfExist(array $data, $name) {
        $value = null;
        if (isset($data[$name])) {
            $value = $data[$name];
        }
        return $value;
    }
    
    
    protected function createWallet(User $user) {
        $wallet = Wallet::create([
            'amount' => 0,
            'currency' => 'USD',
            'description' => 'Wallet for User: '.$user->name
        ]);
        $user->wallet()->associate($wallet);
        return $user;
    }
    
    protected function createUserShop(User $user) {
        if ($user->identity == 'business') {
            $shop = $this->createShop([
                'address' => $user->address->toArray(),
                'name' => $user->name . ' Shop',
                'type' => 'store',
                'description' => 'Default Shop for '.$user->name
            ]);
            $shop->user()->associate($user);
            $shop->save();
        }
    }
}
