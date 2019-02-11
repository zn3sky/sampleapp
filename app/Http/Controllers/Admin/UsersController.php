<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * ユーザー管理／ユーザー一覧
     *
     * @return view
     */
    public function index() 
    {
        return view('admin.users.index', [
            'users' => User::all()
        ]);
    }

    /**
     * ユーザー管理／ユーザー新規作成／フォーム
     *
     * @return view
     */
    public function showCreateForm() 
    {
        return view('admin.users.create_form', []);
    }

    /**
     * ユーザー管理／ユーザー新規作成／確認
     *
     * @return view
     */
    public function showCreateConfirm() 
    {
        return view('admin.users.create_confirm', []);
    }

    /**
     * ユーザー管理／ユーザー新規作成／登録
     *
     * @return view
     */
    public function create() 
    {
        // TODO redirect index
    }

    /**
     * ユーザー管理／ユーザー編集／フォーム
     *
     * @return view
     */
    public function showEditForm(User $id) 
    {
        return view('admin.users.edit_form', []);
    }

    /**
     * ユーザー管理／ユーザー編集／確認
     *
     * @return view
     */
    public function showEditConfirm(User $id) 
    {
        return view('admin.users.edit_confirm', []);
    }

    /**
     * ユーザー管理／ユーザー編集／登録
     *
     * @return view
     */
    public function edit(User $id) 
    {
        // TODO redirect index
    }
}
