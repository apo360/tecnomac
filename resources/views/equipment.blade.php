<x-website>
    <div class="page-head">
        <div class="page-head__bg" style="background-image: url({{asset('public/img/excavator-rental-service.png')}})">
            <div class="page-head__title">Get “Excavators” On Rent</div>
            <div class="page-head__breadcrumb">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('welcome')}}">Home</a></li>
                    <li><span>Get “Excavators” On Rent</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="uk-section uk-container uk-container-large">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-1-3@l">
                    <div class="uk-hidden@l uk-margin-small-bottom"><button class="js-more-filter uk-button uk-button-default uk-button-large uk-width-1-1" type="button"><span>Filters</span><span data-uk-icon="settings"></span></button></div>
                    <aside class="js-filter-content sidebar --left">
                        <div class="widjet widjet-filter">
                            <h4 class="widjet__title">Refine Search</h4>
                            <form class="uk-form-stacked" action="#!">
                                <div class="uk-margin-small">
                                    <label class="uk-form-label">Select Category</label>
                                    <div class="uk-form-controls">
                                        <select class="js-select" name="category">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin-small">
                                    <label class="uk-form-label">Select Equipment</label>
                                    <div class="uk-form-controls">
                                        <select class="js-select" name="equipment">
                                            @foreach($equipments as $equipment)
                                            <option value="{{$equipment->id}}">{{$equipment->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin-small">
                                    <label class="uk-form-label">Pickup Location</label>
                                    <div class="uk-form-controls uk-inline uk-width-1-1">
                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: location"></span>
                                        <input class="uk-width-1-1" type="text" name="pickup_location" placeholder="New York MainLand">
                                    </div>
                                </div>
                                <div class="uk-margin-small">
                                    <label class="uk-form-label">Pickup Date Range</label>
                                    <div class="uk-form-controls uk-inline uk-width-1-1">
                                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                        <input class="js-date uk-width-1-1" type="text" name="pickup_date_range" placeholder="20/08/2021 to 25/08/2021" data-language="en" data-multiple-dates="true" data-multiple-dates-separator=" to ">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="widjet widjet-price">
                            <h4 class="widjet__title">Operating Weight<small>(Ton)</small></h4>
                            <div class="range-box">
                                <input class="js-range-slider" id="range-weight" type="text" name="operating_weight" value="">
                                <div class="range-box__desc">
                                    <span>Range from</span>
                                    <input id="range-weight-from" type="text" name="operating_weight_from">
                                    <span>To</span>
                                    <input id="range-weight-to" type="text" name="operating_weight_to">
                                </div>
                            </div>
                        </div>
                        <div class="widjet widjet-price">
                            <h4 class="widjet__title">Digging Depth<small>(Meter)</small></h4>
                            <div class="range-box">
                                <input class="js-range-slider" id="range-meter" type="text" name="digging_depth" value="">
                                <div class="range-box__desc">
                                    <span>Range from</span>
                                    <input id="range-meter-from" type="text" name="digging_depth_from">
                                    <span>To</span>
                                    <input id="range-meter-to" type="text" name="digging_depth_to">
                                </div>
                            </div>
                        </div>
                    </aside>

                </div>
                <div class="uk-width-2-3@l">
                    <div class="equipment-head">
                        <div>
                            <span>Showing results <b>1 - 6</b> of total <b>25</b></span>
                        </div>
                        <div>
                            <div class="sort-box">
                                <span>Sort By:</span>
                                <select class="js-select">
                                    <option value="Price: Low to High">Price: Low to High</option>
                                    <option value="Price: Low to High">Price: Low to High</option>
                                    <option value="Price: Low to High">Price: Low to High</option>
                                </select>
                            </div>
                            <div class="view-box">
                                <a class="view-item" href="{{ route('equipments.list') }}">
                                    <img src="{{ asset('public/img/view-list.svg') }}" alt="icon" data-uk-svg>
                                </a>
                                <a class="view-item active" href="{{ route('equipments.grid') }}">
                                    <img src="{{ asset('public/img/view-grid.svg') }}" alt="icon" data-uk-svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid uk-child-width-1-2@s" data-uk-grid>
                        @foreach($equipments as $equipment)
                        <div>
                            <div class="equipment-item">
                                <div class="equipment-item__box">
                                    <div class="equipment-item__media">
                                        <a href="{{ route('equipment.detail', ['id' => $equipment->id]) }}">
                                            <img src="{{ asset('assets/img/equipment-1.jpg') }}" alt="Equipment Image" />
                                        </a>
                                    </div>
                                    <div class="equipment-item__info">
                                        <div class="equipment-item__title">
                                            <a href="{{ route('equipment.detail', ['id' => $equipment->id]) }}">
                                                {{ $equipment->name }}
                                            </a>
                                        </div>
                                        <div class="equipment-item__links">
                                            <a href="{{ route('categories.view', ['id' => $equipment->id]) }}">View Catalogue</a>
                                            <a href="{{ route('quotations.print') }}">Print Quotation</a>
                                        </div>
                                        <div class="equipment-item__list">
                                            <ul>
                                                <li>Brand: {{ $equipment->brand }}</li>
                                                <li>MFG Year: {{ $equipment->years }}</li>
                                                <li>Model: {{ $equipment->model }}</li>
                                                <li>Operating Weight: {{ $equipment->weights }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="equipment-item__btn">
                                        <button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button">
                                            <span>Book now</span><span data-uk-icon="arrow-right"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <ul class="uk-pagination uk-flex-center uk-margin-large-top">
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-website>

