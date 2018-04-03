<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.article.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->getView();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createArticle(Request $request)
    {
        $id  = $request->id;
        if ($id) {
            $request->validate([
                'title' => "required|max:255|unique:articles,title,$id,id",
                'thumbnail'=>"image|mimes:jpg,png,jpeg,gif,svg|max:1000",
                'content' => "required",
            ]);
        } else {
            $request->validate([
                'title' => "required|max:255|unique:articles,title,NULL,id",
                'thumbnail'=>["required","image"],
                'content' => "required",
            ]);
        }
        if ($id) {
            $article = Article::find($id);
            if (!$article) {
                return redirect()->route('admin.article.index')->with('error', 'Article not found.');
            }
        } else {
            $article = new Article();
        }
        $article->category_id = $request-> category_id;
        $article->title = $request->title;
        if ($request->hasFile('thumbnail')) {
        $image = $request->file('thumbnail');
                $path = storage_path().'/uploads/images/news/';
                dd($path);
                $filename = time() . '.' . $image->getClientOriginalExtension();
                if (!file_exists($path)) {
                    \File::makeDirectory($path, $mode = 0777);
                }
                $upload = $image->move($path, $filename);
                $article->thumbnail = $path . $filename;
                if (!$upload) {
                    return redirect()->route('admin.article.index')->with('error', 'Upload file false');
                }
            }
        $article->save();
        if (!$article->save()) {
            return redirect()->route('admin.article.index')->with('error', 'An error occurred, news has not been saved');
        }
        return redirect()->route('admin.article.index')->with('success','News has been save successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $this->getView($id);
    }

    /**
     * Get view create/edit image news
     *
     * @param int|null $id
     * @return Response View
     */
    public function getView($id = null) {
        if ($id) {
            $article = Article::find($id);
            if (!$article) {
                return redirect()->route('admin.article.index')->with('error','Article not found');
            }
            $cateId = $article->category_id;
        } else {
            $article = null;
            $cateId = null;
        }
        return view('admin.article.create', [
            'article' => $article,
            'categoriesHtml' => Category::showCategories(Category::all(), old('category', $cateId)),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
