<!-- Lambda Pledge Class -->
<h3>Lambda Pledge Class</h3>

<!-- Andrew Mei -->
@if($brothers->where('seo', 'AndrewMei')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'AndrewMei')->first()->seoExternal}}/">Andrew Mei</a><br>
@else
    Andrew Mei<br>
@endif

<!-- Arvind Ramgopal -->
@if($brothers->where('seo', 'ArvindRamgopal')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'ArvindRamgopal')->first()->seoExternal}}/">Arvind Ramgopal</a><br>
@else
    Arvind Ramgopal<br>
@endif

<!-- Ashwin Chandrasekhar -->
@if($brothers->where('seo', 'AshwinChandrasekhar')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'AshwinChandrasekhar')->first()->seoExternal}}/">Ashwin Chandrasekhar</a><br>
@else
    Ashwin Chandrasekhar<br>
@endif

<!-- Charles Calkins -->
@if($brothers->where('seo', 'CharlesCalkins')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'CharlesCalkins')->first()->seoExternal}}/">Charles Calkins</a><br>
@else
    Charles Calkins<br>
@endif

<!-- Gen Morigami -->
@if($brothers->where('seo', 'GenMorigami')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'GenMorigami')->first()->seoExternal}}/">Gen Morigami</a><br>
@else
    Gen Morigami<br>
@endif

<!-- Jake Wang -->
@if($brothers->where('seo', 'JakeWang')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JakeWang')->first()->seoExternal}}/">Jake Wang</a><br>
@else
    Jake Wang<br>
@endif

<!-- Matt DeMichiel -->
@if($brothers->where('seo', 'MattDeMichiel')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'MattDeMichiel')->first()->seoExternal}}/">Matt DeMichiel</a><br>
@else
    Matt DeMichiel<br>
@endif

<!-- Mickey Shiotani -->
@if($brothers->where('seo', 'MickeyShiotani')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'MickeyShiotani')->first()->seoExternal}}/">Mickey Shiotani</a><br>
@else
    Mickey Shiotani<br>
@endif

<!-- Mitchell Shiotani -->
@if($brothers->where('seo', 'MitchellShiotani')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'MitchellShiotani')->first()->seoExternal}}/">Mitchell Shiotani</a><br>
@else
    Mitchell Shiotani<br>
@endif
