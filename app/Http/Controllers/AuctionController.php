<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Auction;
use App\Http\Requests\StoreAuction;
use App\Media;
use App\Bid;
use Auth;


class AuctionController extends Controller
{
    public function __construct(Auction $auction, Media $media, Bid $bid){
        $this->auction = $auction;
        $this->media = $media;
        $this->bid = $bid;
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
            ['auctions' => $this->auction
                ->whereDate('end_date', '>', now())
                ->get(),]
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
    public function store(StoreAuction $request)
    {
        $validated = $request->validated();

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


        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auctionBids = $this->bid->where('auction_id', $id)->max('price');
//        return $auctionBids;
        if ($auctionBids == 0)
        {
            $price = $this->auction->find($id)->min_price;
        }
        else
        {
            $price = $auctionBids + 1;
        }
//        return $price;
        return view(
            'auctions.show',
            ['auction' => $this->auction->find($id),
            'auctions' => $this->auction->inRandomOrder()->get(),
            'price' => $price
            ]);
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

    public function homepage()
    {
        return view(
            'welcome',
            ['auctions' => $this->auction->all(),]
        );

    }
}
