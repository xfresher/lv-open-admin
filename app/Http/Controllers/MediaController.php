<?php

namespace App\Http\Controllers;

class MediaController extends Controller
{
    protected $medias = [];

    public function __construct()
    {
        $this->medias = $this->medias();
    }

    public function index()
    {
        $compact = [];
        $compact['items'] = $this->medias;

        return view('medias.index', $compact);
    }

    public function show($media)
    {
        $compact = [];
        $compact['item'] = $this->medias[$media] ?? null;

        if ($compact['item'] == '') {
            return redirect()->route('medias.index');
        }

        return view('medias.show', $compact);
    }

    protected function medias()
    {
        $medias = [];

        for ($i = 0; $i < 1; $i++) {
            // $code = sha1(uniqid(mt_rand(), true));
            $code = '7612ce21251e478cd54586754745d882cf9e877d';

            $medias[$code] = (object)[
                'title'             => 'PHP is the future',
                'slug'              => $code,
                'meta_url'          => 'https://live-par-2-abr.livepush.io/vod/bigbuckbunny/index.m3u8',
                'meta_name'         => $code,
                'meta_type'         => 'mp4',
                'meta_duration'     => '',
                'preview_images'    => '',
                'thumbnails'        => '',
                'content'           => null,
                'status'            => 1,
            ];
        }

        return $medias;
    }
}
