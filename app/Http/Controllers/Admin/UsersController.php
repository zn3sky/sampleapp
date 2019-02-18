<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

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
            'pageHeader' => 'ユーザー管理',
            'users'      => User::all()
        ]);
    }

    /**
     * ユーザー管理／ユーザー一覧
     *
     * @return json
     */
    public function getUsers() 
    {
        return [
            'users' => User::all()
        ];
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
        $request->flash();

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
        if (!$request->old('name')) {
            return redirect()->action('Admin\UsersController@showCreateForm');
        }

        $user = User::create([
            'name'     => $request->old('name'),
            'email'    => $request->old('email'),
            'password' => 'aaa',// TODO
        ]);

        return redirect()
            ->action('Admin\UsersController@index')
            ->with('success_message', '登録しました');
    }

    /**
     * ユーザー管理／ユーザー編集／フォーム
     *
     * @return view
     */
    public function showEditForm(User $user) 
    {
        return view('admin.users.edit_form', [
            'user' => $user,
        ]);
    }

    /**
     * ユーザー管理／ユーザー編集／確認
     *
     * @return view
     */
    public function showEditConfirm(User $user, UserUpdateRequest $request) 
    {
        $request->flash();

        return view('admin.users.edit_confirm', [
            'user'  => $user,
            'name'  => $request->name,
            'email' => $request->email,
        ]);
    }

    /**
     * ユーザー管理／ユーザー編集／登録
     *
     * @return redirect
     */
    public function update(User $user, Request $request) 
    {
        if (!$request->old('name')) {
            return redirect()->action('Admin\UsersController@showEditForm', [$user]);
        }

        $user->name  = $request->old('name');
        $user->email = $request->old('email');
        $user->save();

        return redirect()
            ->action('Admin\UsersController@index')
            ->with('success_message', '編集しました');
    }

    /**
    * ユーザー管理／ユーザー編集／削除
    *
    * @return json
    */
    public function delete(User $user) 
    {
        $user->delete();

        return [];
    }
}
