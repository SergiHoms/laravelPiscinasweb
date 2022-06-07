<div class="desktop-one-column">
    <div class="content-list">
        <div class="lists-contents">
            @if(isset($faqs))
                @foreach($faqs as $faq)
                    <div class="list-content">
                        <div class="list" data-list="{{$faq->title}}">
                            <h3>{{$faq->title}}</h3>
                            <svg  viewBox="0 0 24 24">
                                <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                        </div>
                        <div class="content" data-content="{{$faq->title}}">
                            {!!$faq->description!!}                       
                        </div>                
                    </div>     
                @endforeach      
            @endif        
        </div>
    </div>
</div>