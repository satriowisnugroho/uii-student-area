<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomUser extends Model
{

    protected $fillable = [
        'user_id',
        'room_id',
        'time',
        'date',
        'members',
        'description'
    ];

    public function scopeRoomUser($query)
    {
        return $query->join('users', 'room_users.user_id', '=', 'users.id')
            ->select(
                'books.title',
                'users.name',
                'book_users.created_at',
                'book_users.updated_at',
                'book_users.status',
                'book_users.id',
                'book_users.book_id'
            )
            ->whereNotIn('status', ['pesan']);
    }

}
