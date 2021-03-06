<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\StorePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Quiz;
use Image;
use Log;

class QuizPostController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	//投稿クイズ一覧
	public function index()
	{
		$id = Auth::id();
		$quiz_posts = Quiz::latest()
			->where([
				['user_id', '=', $id]
			])
			->get();
		return view('userpage.quiz_posts', ['quiz_posts' => $quiz_posts]);
	}

	//ユーザー設定
	public function show()
	{
		return view('userpage.setting');
	}

	//クイズ作成フォーム
	public function create()
	{
		// カテゴリと地域をviewに渡す
		$categories = DB::table('categories')
			->select('id', 'name')
			->get();
		$region = DB::table('region')
			->select('id', 'name')
			->get();

		return view('userpage.create_quiz', compact('categories', 'region'));
	}

	//投稿されたデータをDBへ保存する
	public function store(StorePost $request)
	{
		$quiz = new Quiz();
		$quiz->user_id = $request->user()->id;
		$quiz->category_id = $request->category_id;
		$quiz->region_id = $request->region_id;
		$quiz->title = $request->title;
		$quiz->correct = $request->correct;
		$quiz->uncorrect1 = $request->uncorrect1;
		$quiz->uncorrect2 = $request->uncorrect2;
		$quiz->explain_sentence = $request->explain_sentence;

		//画像ファイル名をランダムの文字列へ＆path変更
		$file = $request->file('image_name');
		if ($file != null) {
			$fileName = str_random(20) . '.' . $file->getClientOriginalExtension();
			Image::make($file)->save(public_path('images/' . $fileName));
			$quiz->image_name = '/images/' . $fileName;
		}

		$quiz->save();

		return redirect('/mypage');
	}

	//クイズ編集
	public function edit($quiz_id)
	{
		// カテゴリと地域をviewに渡す
		$categories = DB::table('categories')
			->select('id', 'name')
			->get();
		$region = DB::table('region')
			->select('id', 'name')
			->get();

		$quiz = Quiz::findOrFail($quiz_id);
		return view(
			'userpage.edit_quiz',
			compact('quiz', 'categories', 'region')

		);
	}
	public function update(StorePost $request, $quiz_id)
	{
		$quiz = Quiz::findOrFail($quiz_id);
		$quiz->category_id = $request->category_id;
		$quiz->region_id = $request->region_id;
		$quiz->title = $request->title;
		$quiz->correct = $request->correct;
		$quiz->uncorrect1 = $request->uncorrect1;
		$quiz->uncorrect2 = $request->uncorrect2;
		$quiz->explain_sentence = $request->explain_sentence;

		//画像ファイル名をランダムの文字列へ＆path変更
		$file = $request->file('image_name');
		if ($file != null) {
			$fileName = str_random(20) . '.' . $file->getClientOriginalExtension();
			Image::make($file)->save(public_path('images/' . $fileName));
			$quiz->image_name = '/images/' . $fileName;
		}

		$quiz->save();

		return redirect('/mypage');
	}

	//削除
	public function destroy($quiz_id)
	{
		$quiz = Quiz::findOrFail($quiz_id);
		$quiz->delete();
		return redirect('/mypage');
	}
}
