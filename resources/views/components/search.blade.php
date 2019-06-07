<!-- _______Starting of search_________  -->
<section id="home-search">
    <div class="wrap">
        <form name="searchForm" method="get" action="{{ route('search') }}" onsubmit="">
            <select id="act-select" name="action" class="selectBox-dropdown">
                <option value="suppliers" {{ request()->action == 'suppliers' ? 'selected' : '' }}>Search Suppliers</option>
                <option value="products" {{ request()->action == 'products' ? 'selected' : '' }}>Search Products</option>
            </select>
            <div class="text">
              <input type="text" autocomplete="off" id="q" name="q" value="{{ request()->q ?? '' }}" placeholder="What are you searching for">
            </div>
            <input type="submit" value="Search" class="sbutton">
            <!-- <div class="suggest">
                <span class="suggest__tag">
        Related Searches:
    </span>
                <ul class="suggest__list u-margin-top-small">
                    <li class="suggest__item">
                        <a href="#" class="suggest__link">children's skiing apparel</a>
                    </li>
                    <li class="suggest__item">
                        <a href="#" class="suggest__link">children's skiing apparel</a>
                    </li>
                    <li class="suggest__item">
                        <a href="#" class="suggest__link">children's skiing apparel</a>
                    </li>
                    <li class="suggest__item">
                        <a href="#" class="suggest__link">children's skiing apparel</a>
                    </li>
                    <li class="suggest__item">
                        <a href="#" class="suggest__link">children's skiing apparel</a>
                    </li>
                </ul>
            </div> -->
        </form>
    </div>
</section>
<!-- _______Ending of search_________  -->

@section('scripts')
  <script src="{{ asset('asset/js/typeahead.min.js') }}"></script>
  <script>
    $(function() {
      $('#q').typeahead({
        source: function(query, process){
          let path = "{{ route('autocomplete_search') }}"
          let action = $("[name='action']").children('option:selected').val()

          return $.get(path, { query : query, action : action }, function (data) {
                    return process(data);
                 })
          /*
          url: '{{ route("autocomplete_search") }}?action=%ACTION&q=%QUERY',
          replace: (url, uriEncodedQuery) => {

            return url.replace('%QUERY', uriEncodedQuery).replace('%ACTION', action)
          }
          */
        }
      })

      $('[name="searchForm"]').on('submit', function(e) {

      })
    })
  </script>
@endsection
