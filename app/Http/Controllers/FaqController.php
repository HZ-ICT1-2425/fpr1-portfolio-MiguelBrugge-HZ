<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FaqController extends Controller
{
    /**
     * @return View Page to load
     * Faq page
     */
    public function index() : View
    {
        return view('faq.index', ['faq' => Faq::all()]);
    }

    /**
     * @return View Page to load
     * Create page
     */
    public function create() : View
    {
        return view('faq.create-edit', ['action' => 'create']);
    }

    /**
     * @param Request $request Request
     * @return RedirectResponse Page to load
     * Stores a new Faq
     */
    public function store(Request $request) : RedirectResponse
    {
        $validated = $request->validate([
            'question'   => 'required',
            'answer'     => 'required',
            'link_title' => '',
            'link'       => '',
        ]);
        Faq::create($validated);
        return redirect()->route('faq.index')->with('success', 'FAQ created successfully.');
    }

    /**
     * @param Faq $faq Faq to edit
     * @return View Page to load
     * Edit page
     */
    public function edit(Faq $faq) : View
    {
        return view('faq.create-edit', [
            'faq' => $faq,
            'action' => 'edit'
        ]);
    }

    /**
     * @param Request $request Request
     * @param Faq $faq Faq to update
     * @return RedirectResponse Page to load
     * Updates the Faq
     */
    public function update(Request $request, Faq $faq) : RedirectResponse
    {
        $validated = $request->validate([
            'question'   => 'required',
            'answer'     => 'required',
            'link_title' => '',
            'link'       => '',
        ]);

        $faq->update($validated);
        return redirect()->route('faq.index')->with('success', 'FAQ updated successfully.');
    }

    /**
     * @param Faq $faq Faq to delete
     * @return RedirectResponse Page to load
     * Deletes the Faq
     */
    public function delete(Faq $faq) : RedirectResponse
    {
        $faq->delete();
        return redirect()->route('faq.index')->with('success', 'FAQ deleted successfully.');
    }
}
