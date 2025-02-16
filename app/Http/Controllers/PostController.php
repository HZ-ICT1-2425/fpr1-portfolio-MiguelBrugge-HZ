<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * @return View Page to load
     * Blog page
     */
    public function index() : View
    {
        return view('posts.index', ['posts' => Post::orderBy('created_at', 'desc')->get()]);
    }

    /**
     * @param Post $post Post to show
     * @return View Page to load
     * Post page
     */
    public function show(Post $post) : View
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * @return View Page to load
     * Create page
     */
    public function create() : View
    {
        return view('posts.create-edit', ['action' => 'create']);
    }

    /**
     * @param Request $request Request
     * @return RedirectResponse Page to load
     * Stores a new post
     */
    public function store(Request $request) : RedirectResponse
    {
        // Validate request data
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'link_title' => '',
            'link' => '',
            'icon_path' => 'image',
            'image_path' => 'image',
        ]);

        // Create a new post instance
        $post = Post::create($validated);
        // Handle the icon upload
        $this->handleImageUpload($request, $post);
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * @param Post $post Post to edit
     * @return View Page to load
     * Edit page
     */
    public function edit(Post $post) : View
    {
        return view('posts.create-edit', [
            'post' => $post,
            'action' => 'edit'
        ]);
    }

    /**
     * @param Request $request Request
     * @param Post $post Post to update
     * @return RedirectResponse Page to load
     * Updates the post
     */
    public function update(Request $request, Post $post) : RedirectResponse
    {
        // Validate request data
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'link_title' => '',
            'link' => '',
            'icon_path' => 'image',
            'image_path' => 'image',
        ]);

        // Update post attributes
        $post->update($validated);
        $this->handleImageUpload($request, $post);
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * @param Post $post Post to delete
     * @return RedirectResponse Page to load
     * Deletes the post
     */
    public function delete(Post $post) : RedirectResponse
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }

    /**
     * @param Request $request Request
     * @param Post $post Post to update
     * Handles uploading the images
     */
    private function handleImageUpload(Request $request, Post $post): void
    {
        // Handle the icon upload
        if ($request->hasFile('icon_path')) {
            // Delete old icon if it exists
            if ($post->icon_path && file_exists(public_path($post->icon_path))) {
                unlink(public_path($post->icon_path));
            }

            $icon = $request->file('icon_path');
            $iconName = Str::uuid() . '.' . $icon->extension();
            $icon->move(public_path('images/posts'), $iconName);
            $post->icon_path = 'images/posts/' . $iconName;
        }

        // Handle the image upload
        if ($request->hasFile('image_path')) {
            // Delete old image if it exists
            if ($post->image_path && file_exists(public_path($post->image_path))) {
                unlink(public_path($post->image_path));
            }

            $image = $request->file('image_path');
            $imageName = Str::uuid() . '.' . $image->extension();
            $image->move(public_path('images/posts'), $imageName);
            $post->image_path = 'images/posts/' . $imageName;
        }
    }
}
