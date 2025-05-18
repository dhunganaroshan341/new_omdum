<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GalleryAlbum;
use App\Models\Client;
use App\Models\PageBanner;
use Illuminate\Http\Request;

class FrontGalleryController extends Controller
{
    public function index()
{
    // Get albums that have an associated client, along with their media and client relationship
    $albumsWithClients = GalleryAlbum::has('client')->with(['galleryMedia', 'client'])->get();

    // Group albums by client
    $clientsWithAlbums = $albumsWithClients->groupBy(function ($album) {
        return $album->client->id; // Group by client ID
    });

    // Get albums that don't have an associated client
    $albumsWithNoClients = GalleryAlbum::doesntHave('client')->with(['galleryMedia'])->get();

    // Get all clients (if needed)
    $clients = Client::with('albums')->get();
    $pageBanner = PageBanner::where('page', 'gallery')->first();
    return view('frontend.gallery', compact('clients', 'albumsWithNoClients', 'clientsWithAlbums','pageBanner'));
}



    public function show($id)
    {

        $galleryAlbum = GalleryAlbum::with(['galleryMedia', 'client'])->find($id);

        if (!$galleryAlbum) {
            return response()->json(['message' => 'Album not found'], 404);
        }

        return response()->json([
            'success' => true,
            'message' => $galleryAlbum
        ]);
    }
    public function showClient($id)
    {
        $albums = GalleryAlbum::with(['galleryMedia', 'client'])->where('client_id', $id)->get();



        if (!$albums) {
            return response()->json(['message' => 'Album not found'], 404);
        }

        return response()->json([
            'success' => true,
            'message' => $albums
        ]);
    }

    public function getAllData()
    {

        $galleryAlbums = GalleryAlbum::with(['galleryMedia', 'client'])->get();
        if ($galleryAlbums->isEmpty()) {
            return response()->json(['message' => 'No albums found'], 404);
        }
        $albums = $galleryAlbums;
        return response()->json([
            'success' => true,
            'message' => $albums
        ]);
    }
}
