<aside class="aside">
    <div class="aside__container">
        <ul class="aside__menu">
            @foreach($categories as $category)
                <a href="/" class="aside__link">
                    <li class="aside__category">
                        {{$category->name}}
                        <ul class="aside__subcategory-list">
                            @foreach($category->subcategories as $subcategory)
                                <a href="/" class="aside__link">
                                    <li class="aside__subcategory">
                                        {{$subcategory->name}}
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
</aside>
{{-- <aside class="aside">
    <div class="aside__container">
        {{$categories[0]}}
        {{-- <ul class="aside__menu">
                @foreach ($categories as $category)
                    {{-- <li class="aside__category"> --}}
                        {{-- {{$category}} --}}
                        {{-- {{$category->name}}
                        <ul class="aside__subcategory-list">
                            @foreach($category->subcategories as $subcategory)
                            <li class="aside__subcategory">{{$subcategory->name}}</li>
                            @endforeach
                        </ul> --}}
                    {{-- </li> --}}
                {{-- @endforeach --}}
            {{-- </ul> --}} 
       {{-- <ul class="aside__menu">
           <li class="aside__category">Cat
               <ul class="aside__category-list">
                   <li class="aside__subcategory">Sub</li>
                   <li class="aside__subcategory">Sub</li>
                   <li class="aside__subcategory">Sub</li>
                   <li class="aside__subcategory">Sub</li>
               </ul>
           </li>
           <li class="aside__category">Cat
               <ul class="aside__category-list">
                   <li class="aside__subcategory">Sub</li>
                   <li class="aside__subcategory">Sub</li>
                   <li class="aside__subcategory">Sub</li>
                   <li class="aside__subcategory">Sub</li>
               </ul>
           </li>
           <li class="aside__category">Cat
               <ul class="aside__category-list">
                   <li class="aside__subcategory">Sub</li>
                   <li class="aside__subcategory">Sub</li>
                   <li class="aside__subcategory">Sub</li>
                   <li class="aside__subcategory">Sub</li>
               </ul>
           </li>
       </ul> --}}
    {{-- </div>        
</aside> --}} 