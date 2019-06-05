<?php
    namespace App\Http\Controllers;

    use App\User;
    use App\Http\Controllers\Controller;


    class cms extends Controller
    {
        //顯示所有資料
        public function index()
        {
            return view('index');
        }
        //新增一筆資料
        public function create()
        {
            // 
        }

        //儲存資料
        public function store(Request $request)
        {
            //
        }

        //顯示一筆資料
        public function show($id)
        {
            //
        }

        //編輯一筆資料
        public function edit($id)
        {
            //
        }

        //更新一筆資料
        public function update(Request $request, $id)
        {
            //
        }

        //刪除一筆資料
        public function destroy($id)
        {
            //
        }
    }
