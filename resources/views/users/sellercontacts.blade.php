@extends('layouts.inner')
@section('content')
<div class="main_dashboard">
    <section class="dashboard-section">
        <div class="container">
            <div class="manage-btn">My Seller Contacts</div>
            <div class="row">
                @if(!$allrecords->isEmpty())
                    @foreach($allrecords as $allrecord)
                    <div class="col-sm-5 col-md-3 buycnt">
                        <div class="profile-bx">
                            <div class="profile-img">
                                @if(isset($allrecord->Seller) && $allrecord->Seller->profile_image)
                                    {{HTML::image(PROFILE_SMALL_DISPLAY_PATH.$allrecord->Seller->profile_image, SITE_TITLE, ['id'=> 'pimage'])}}
                                @else
                                    {{HTML::image('public/img/front/user-img.png', SITE_TITLE, ['id'=> 'pimage'])}}
                                @endif
                            </div>
                            <h2>{!! isset($allrecord->Seller)?$allrecord->Seller->first_name.' '.$allrecord->Seller->last_name:'' !!}</h2>
                            <p id="contactn" class="showall"> <span id="showcontact"> {!! isset($allrecord->Seller->contact)?$allrecord->Seller->contact:'' !!} </span> </p>
                           
                            <div class="preview-btn"><a href="{{ isset($allrecord->Seller)? URL::to( 'public-profile/'.$allrecord->Seller->slug):'#' }}" class="btn btn-default">View Public Profile</a></div>

                            <div class="user-details">
                                <ul>
                                    <li><label><i class="fa fa-user" aria-hidden="true"></i>Member since</label><span>{!! isset($allrecord->Seller)?$allrecord->Seller->created_at->format('M Y'):''!!}</span></li>
                                    <li id="countryctn">
                                        <label class="cntry_div"><i class="fa fa-map-marker" aria-hidden="true"></i>From</label>
                                        <span class="cnnnm cntry_right" id="countryid">
                                            <span id="cname">
                                                <?php
                                                $addd = array();
                                                if (isset($allrecord->Seller->city)) {
                                                    $addd[] = $allrecord->Seller->city;
                                                }
                                                if (isset($allrecord->Seller->country_id)) {
                                                    $addd[] = $allrecord->Seller->Country->name;
                                                }
                                                if (isset($allrecord->Seller->zipcode)) {
                                                    $addd[] = $allrecord->Seller->zipcode;
                                                }
                                                echo implode(', ', $addd);
                                                ?>
                                            </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else 
                <div class="col-md-12"><div class="management-full no_contact">No requests found. </div></div>
                @endif
            </div>
        </div>
    </section>
</div>
@endsection