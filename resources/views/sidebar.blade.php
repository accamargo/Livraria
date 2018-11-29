<div  class="col-md-3">
        <div class="p-2" style="background-color:#ddd;">
                <h5>Categorias:</h5>
                <div class="container">
                    @foreach ($bookcategories as $bookcategory)
                    <li class="list-inline">
                    <a href="/searchbrowse/{{$bookcategory->CategoryID}}">{{$bookcategory->CategoryName}}</a>
                    </li>
                    @endforeach
                </div>
        </div>
</div>