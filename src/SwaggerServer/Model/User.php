<?php
/**
 * User
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Model
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore
 *
 * This is a sample server Petstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).  For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Model;

use \ArrayAccess;

/**
 * Class representing the User model.
 *
 * A User who is purchasing from the pet store
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $_name = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var array[]
      */
    protected static $_attributes = [
        'id' => ['id', 'int', 'int64', 'setId', 'getId'],
        'username' => ['username', 'string', null, 'setUsername', 'getUsername'],
        'first_name' => ['firstName', 'string', null, 'setFirstName', 'getFirstName'],
        'last_name' => ['lastName', 'string', null, 'setLastName', 'getLastName'],
        'email' => ['email', 'string', null, 'setEmail', 'getEmail'],
        'password' => ['password', 'string', null, 'setPassword', 'getPassword'],
        'phone' => ['phone', 'string', null, 'setPhone', 'getPhone'],
        'user_status' => ['userStatus', 'int', 'int32', 'setUserStatus', 'getUserStatus'],
    ];
    

    
    /**     * @var int|null
     */
    protected $id;

    /**     * @var string|null
     */
    protected $username;

    /**     * @var string|null
     */
    protected $first_name;

    /**     * @var string|null
     */
    protected $last_name;

    /**     * @var string|null
     */
    protected $email;

    /**     * @var string|null
     */
    protected $password;

    /**     * @var string|null
     */
    protected $phone;

    /**
     * User Status
     *
     * @var int|null
     */
    protected $user_status;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->username = isset($data['username']) ? $data['username'] : null;
        $this->first_name = isset($data['first_name']) ? $data['first_name'] : null;
        $this->last_name = isset($data['last_name']) ? $data['last_name'] : null;
        $this->email = isset($data['email']) ? $data['email'] : null;
        $this->password = isset($data['password']) ? $data['password'] : null;
        $this->phone = isset($data['phone']) ? $data['phone'] : null;
        $this->user_status = isset($data['user_status']) ? $data['user_status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function modelName() {
        return self::$_name;
    }

    /**
     * Array of property to mappings.
     *
     * @return array[]
     */
    public function modelAttributes() {
        
        return self::$_attributes;
    }

    /**
     * Validate all the properties in the model
     *
     * Return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function isValid()
    {
        return true;
    }


    /**
     * Gets id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param int|null $id
     *
     * @return $this
     */
    public function setId($id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets username.
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets username.
     *
     * @param string|null $username
     *
     * @return $this
     */
    public function setUsername($username = null)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets first_name.
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Sets first_name.
     *
     * @param string|null $first_name
     *
     * @return $this
     */
    public function setFirstName($first_name = null)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Gets last_name.
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Sets last_name.
     *
     * @param string|null $last_name
     *
     * @return $this
     */
    public function setLastName($last_name = null)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Gets email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets email.
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets password.
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets password.
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function setPassword($password = null)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets phone.
     *
     * @param string|null $phone
     *
     * @return $this
     */
    public function setPhone($phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Gets user_status.
     *
     * @return int|null
     */
    public function getUserStatus()
    {
        return $this->user_status;
    }

    /**
     * Sets user_status.
     *
     * @param int|null $user_status  User Status
     *
     * @return $this
     */
    public function setUserStatus($user_status = null)
    {
        $this->user_status = $user_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->$offset) ? $this->$offset : null;
    }

    /**
     * Sets value based on offset.
     * @param  string  $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        $this->$offset = null;
    }
}


