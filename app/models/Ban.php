<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Ban extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	protected $fillable = array('user_id', 'ban_reason', 'banned_ip');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ip_bans';

}
