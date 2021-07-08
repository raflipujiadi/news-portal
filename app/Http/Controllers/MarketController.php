<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doWebScraping()
    {
        $kataKunci = "Market";
        $from = "2021-06-30";
        $sortBy = "publishedAt";
        $apiKey = "426a1247f2764c0cb3c7d4ffe8d252ae"; /* <-- Silakan register di newsapi.org untuk mendapatkan API_KEY */
        $language = "en";
        $alamatAPI = "http://newsapi.org/v2/everything?" .
            "q={$kataKunci}&language={$language}&from={$from}" .
            "&sortBy={$sortBy}&apiKey={$apiKey}";

        # ambil data json dari $alamatAPI
        $data = file_get_contents($alamatAPI);
        # parsing variabel $data ke dalam array
        $dataBerita = json_decode($data);

        if ($dataBerita->status === "ok") {
            # tampilkan menggunakan perulangan
            foreach ($dataBerita->articles as $berita) {
                if ($berita->urlToImage) {
                    echo "<img style='width: 10rem' src='{$berita->urlToImage}'>";
                }
                echo "<section id='home'><img width='600px' src='{$berita->urlToImage}'><div class='kolom'><p class='deskripsi'>{$berita->description}</p><h3><a href='{$berita->url}'>{$berita->title}</a></h3></div></section> <a href='' class='btn-langganan'>Berlangganan</a></p> </div></section>";


                echo "<p>{$berita->description}</p>";
                echo "<hr>";
            }
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return Market::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
