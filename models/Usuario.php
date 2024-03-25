<?php

namespace Model;

class Usuario extends ActiveRecord {
    //Base de datos
    protected static $tabla ='usuarios';
    protected static $columnasDB = [
        'id',
        'nombre',
        'apellido',
        'email',
        'password',
        'telefono',
        'admin',
        'confirmado',
        'token'
    ];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;

    //Método constructor:
    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->admin = $args['admin'] ?? 0;
        $this->confirmado = $args['confirmado'] ?? 0;
        $this->token = $args['token'] ?? '';
    }

    //Mensajes de validación para la creación de una cuenta:
    public function validarNuevaCuenta () {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'El nombre no puede estar vacío';
        }

        if (!$this->apellido) {
            self::$alertas['error'][] = 'El apellido no puede estar vacío';
        }

        if (!$this->telefono) {
            self::$alertas['error'][] = 'El telefono no puede estar vacío';
        }

        if (!$this->email) {
            self::$alertas['error'][] = 'El email no puede estar vacío';
        }

        if (!$this->password) {
            self::$alertas['error'][] = 'Debe introducir una contraseña';
        }

        if (strlen($this->password) < 6) {
            self::$alertas['error'][] = 'La contraseña debe contener al menos 6 caracteres';
        }

        return self::$alertas;
    }

    public function validarLogin() {
        if (!$this->email) {
            self::$alertas['error'][] = "El email no puede estar vacío";
        }
        if (!$this->password) {
            self::$alertas['error'][] = "Debe introducir una contraseña";
        }

        return self::$alertas;
    }

    public function validarEmail() {
        if (!$this->email) {
            self::$alertas['error'][] = "El email no puede estar vacío";
        }
        return self::$alertas;
    }

    public function validarPassword() {
        if(!$this->password) {
            self::$alertas['error'][] = 'La contraseña no puede estar vacía';
        }

        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'La contraseña debe tener al menos 6 caracteres';
        }

        return self::$alertas;
    }

    public function existeUsuario() {
        $query = " SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1 ";

        $resultado = self::$db->query($query);

        if($resultado->num_rows) {
            self::$alertas['error'][] = 'El usuario ya está registrado';
        }

        return $resultado;
    }

    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function crearToken() {
        $this->token = uniqid();
    }

    public function comprobarPasswordAndVerificado($password) {
        //Verificar password:
        $resultado = password_verify($password, $this->password );
        // debuguear($resultado);

        //Verificar si está verificado:
        if(!$resultado || !$this->confirmado) {
            self::$alertas['error'][] = 'La cuenta no ha sido confirmada o la contraseña es incorrecta';
        } else {
            return true;
        }    
    }
}