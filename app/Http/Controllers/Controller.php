<?php

namespace App\Http\Controllers;

abstract class Controller

{

    /**
     * file upload
     */
    protected function file_name($file = null)
    {
        if ($file) {
            $uniqueName = md5(
                rand(100, 200) . "_" . time() . str_shuffle('abcdef')
            ) . "." . $file->getClientOriginalExtension();
        } else {
            $uniqueName = md5(rand(100, 200) . "_" . time() . str_shuffle('abcdef'));
        }

        return $uniqueName;
    }




    protected function fileUpload($file = null, $path)
    {
        if (!$file) {
            return null;
        }

        if ($file) {
            $filename = $this->file_name($file);
            $file->move(public_path($path), $filename);
        }
        return $filename;
    }

    /**
     * create slug
     */

    protected function makeSlug($title)
    {
        // ছোট হাতের অক্ষরে রূপান্তর
        $slug = strtolower($title);

        // special character সরানো
        $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);

        // একাধিক space বা dash কে single dash বানানো
        $slug = preg_replace('/[\s-]+/', '-', $slug);

        // শুরু আর শেষে dash থাকলে সরানো
        $slug = trim($slug, '-');

        return $slug;
    }
}
