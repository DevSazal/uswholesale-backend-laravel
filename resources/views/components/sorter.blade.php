<form name="searchForm" method="get" action="" onsubmit="" class="form-inline">
    <input type="hidden" name="action" value="{{ request()->action ?? '' }}">
    <input type="hidden" autocomplete="off" id="q" name="q" value="{{ request()->q ?? '' }}" placeholder="What are you searching for">
    <div class="form-group">
      <select id="act-select" name="sortBy" class="form-control">
          <option value="">Sort By Price</option>
          <option value="MinToMax" {{ request()->sortBy == 'MinToMax' ? 'selected' : '' }}>Low to High</option>
          <option value="MaxToMin" {{ request()->sortBy == 'MaxToMin' ? 'selected' : '' }}>High to Low</option>
      </select>
    </div>

    <button type="submit" value="Search" class=""><i class="fa fa-search"></i> Search</button>
</form>
