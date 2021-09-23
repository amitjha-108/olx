<div>
   
     <div class="card">
            <div class="card-header">{{$category->title}}</div>
            <div class="card-body">
                <ul>
                    @foreach ($category->child as $cat)
                        <li><a href="">{{$cat->title}}</a></li>
                    @endforeach
                    
                </ul>
                
                
            </div>
        </div>
   
</div>
