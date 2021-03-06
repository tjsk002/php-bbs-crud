<?php
//
//namespace App\Http\Controllers\Auth;
//
////use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
//
//class JoinController
//{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//
//    protected $redirectTo = '/home2';
//
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:6|confirmed',
//        ]);
//    }
//
//    public function __construct()
//    {
////        $this->middleware('guest');
//    }
//
//
//    public function index()
//    {
//        // __METHOD__ Article 컬렉션을 조회
//        return view('admin.join');
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create(array $data)
//    {
//        // 컬렉션을 만들기 위한 폼을 담은 뷰를 반환한다
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        // 사용자의 입력한 폼 데이터로 새로운 article 컬렉션을 만든다
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        // 다음 기본키를 가진 article 모델을 조회한다
//
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        // 다음 기본키를 가진 article 모델을 수정하기 위한 폼을 담은 뷰를 반환한다
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        // 사용자의 입력한 폼 데이터로 다음 기본 키를 가진 article 모델을 수정한다
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        // 기본키를 사진 article 모델 삭제한다
//    }
//}
