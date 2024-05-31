<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $links[count($links) - 1]['label'] }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @foreach ($links as $link)
                        @if ($loop->last)
                            <li class="breadcrumb-item active">{{ $link['label'] }}</li>
                        @else
                            <li class="breadcrumb-item"><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
                        @endif
                    @endforeach
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
