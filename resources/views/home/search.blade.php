<x-layout>

{{-- books --}}
<section class="latest-books py-5">
    <div class="container">
        
        <h2 class="section-title text-capitalize mb-4">
            Results for: {{ $query }}
        </h2>
        <div class="row">

            @foreach ($result as $book)
                <div class="col-md-4 col-lg-3">
                    <x-book-view :book="$book"></x-book-view>
                </div>
            @endforeach

        </div>

        {{-- pagination --}}
        <div class="pagination py-5">
            {{ $result->links() }}
        </div>
        {{-- pagination --}}

    </div>
</section>
{{-- books --}}



</x-layout>