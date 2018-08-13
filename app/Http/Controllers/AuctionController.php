<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Auction;
use App\Media;
use Auth;

class AuctionController extends Controller
{
    public function __construct(Auction $auction, Media $media){
        $this->auction = $auction;
        $this->media = $media;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'auctions.index',
            ['auctions' => $this->auction->all(),]
        );
    }

    public function myAuctions()
    {
        return view(
            'auctions.myauctions',
            ['auctions' => $this->auction->where('user_id', Auth::user()->id)]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'auctions.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $auction = $this->auction->create([
                'user_id' =>  Auth::user()->id,
                'name' =>  $request->name,
                'style' =>  $request->style,
                'year' => $request->year,
                'width' =>  $request->width,
                'height' =>  $request->height,
                'depth' =>  $request->depth,
                'description' =>  $request->description,
                'condition' =>  $request->condition,
                'origin' =>  $request->origin,
                'min_price' =>  $request->min_price,
                'max_price' =>  $request->max_price,
                'buy_now' =>  $request->buy_now,
                'end_date' =>  $request->end_date,
            ]);

        if(isset($request->media1)) {
            foreach ($request->file('media1') as $key => $value) {
                $this->uploadMedia($value, $request->name . $key, $request->media1_type, $auction->id);
            }
        }
        if(isset($request->media2)) {
            $this->uploadMedia($request->media2, $request->name, $request->media2_type, $auction->id);
        }
        if(isset($request->media3)) {
            $this->uploadMedia($request->media3, $request->name, $request->media3_type, $auction->id);
        }


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view(
            'auctions.show',
            ['auction' => $this->auction->find($id)]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

    public function uploadMedia($media, $name, $type, $auction_id )
    {
        $FKmediaID = new Media();
        $extension = $media->getClientOriginalExtension();
        $filename = 'auction-'.$auction_id.'-'.str_replace(' ', '-', $name).'-'.$type.'-'.time().'.'.$extension;
        $altDescription = 'Picture from auction with name: '.$name;
        $media->move('images/upload/', $filename);
        $media->source = $filename;
        $media = $this->media->create([
            'name' => $name,
            'source' => $filename,
            'alt' => $altDescription,
            'type' => $type,
            'auction_id' => $auction_id]);
    }

    public function deleteImage($mediaID)
    {
        $imageFile = $this->media->find($mediaID);
        $imagePath = "images/upload/" . $imageFile->source;
        File::delete($imagePath);
        $this->media->destroy($mediaID);
        return back();
    }
}
