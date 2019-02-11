<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Support\Collection;

class UsersController extends Controller
{
    const SESSION_KEY_NEW_USER_DATA = 'new_user_data';

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
     * @param UserCreateRequest $request
     * @return view
     */
    public function showCreateConfirm(UserCreateRequest $request)
    {
        $request->session()->put(self::SESSION_KEY_NEW_USER_DATA, [
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        return view('admin.users.create_confirm', [
            'name'  => $request->name,
            'email' => $request->email,
        ]);
    }

    /**
     * ユーザー管理／ユーザー新規作成／登録
     *
     * @return view
     */
    public function create(Request $request) 
    {
        if (!$request->session()->has(self::SESSION_KEY_NEW_USER_DATA)) {
            return redirect()->action('Admin\UsersController@showCreateForm');
        }

        $newUser = $request->session()->get(self::SESSION_KEY_NEW_USER_DATA);

        $user = User::create([
            'name'     => $newUser['name'],
            'email'    => $newUser['email'],
            'password' => 'aaa',// TODO
        ]);

        $request->session()->forget(self::SESSION_KEY_NEW_USER_DATA);

        return redirect()
            ->action('Admin\UsersController@index')
            ->with('success_message', '登録しました');
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
        return redirect()
            ->action('Admin\UsersController@index')
            ->with('success_message', '編集しました');
    }
}
