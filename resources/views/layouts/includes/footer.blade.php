<div class="footer hidden-print">
    <div class="footer-inner">
        <div class="footer-content">
            <span class="bigger-120">
                @if(isset($generalSetting->copyright))
                    @if(isset($generalSetting->institute))
                        <span class="blue bolder"><a href="{{isset($generalSetting->website)?$generalSetting->website:'#'}}">{{$generalSetting->institute}}</a></span>
                    @endif
                    &copy;
                    {!! $generalSetting->copyright !!}
                @else
                    <span class="blue bolder"><a href="https://#">Meho.Solutions</a></span>
                    &copy;
                    <a href="https://meho.solutions" target="_blank">IS.</a>
                @endif
            </span>
        </div>
    </div>
</div>

