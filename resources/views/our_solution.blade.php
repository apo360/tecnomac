<!-- our_solution.blade.php -->
<x-website>
    <div class="page-head">
        <div class="page-head__bg" style="background-image: url({{ asset('public/img/bg_page-categories-1.png') }})">
            <div class="page-head__title">Equipment Categories</div>
            <div class="page-head__breadcrumb">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li><span>Equipment Categories</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="uk-section-large uk-container">
            <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l" data-uk-grid>
                @foreach($categories as $category)
                    <div>
                        <div class="feature-item">
                            <div class="feature-item__box">
                                <div class="feature-item__icon"><img src="{{ asset('public/img/'.$category->icon)}}" alt="{{ $category->name }}"></div>
                                <button class="feature-item__title">{{ $category->name }}</button>
                                <div class="feature-item__text">{{ $category->description }}</div>
                                <div class="feature-item__more"><a href="#"><span data-uk-icon="arrow-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-website>
