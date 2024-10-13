<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Cambia esto al nombre de tu tabla personalizada
    protected $table = 'usuarios'; // Asegúrate de que el nombre coincida con tu tabla en la base de datos

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombres',    // Cambia esto al nombre de la columna en tu tabla
        'username',   // Asegúrate de que coincida con tu columna
        'contrasena', // Cambia esto al nombre de la columna en tu tabla
        'correo',     // Cambia esto al nombre de la columna en tu tabla
        'rol',        // Cambia esto al nombre de la columna en tu tabla
        'fecha_creacion', // Cambia esto al nombre de la columna en tu tabla
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'contrasena', // Asegúrate de ocultar la contraseña
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            // Ajusta esto si tienes atributos que necesiten casting
        ];
    }
}
