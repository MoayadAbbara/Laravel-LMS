@props(['index','lesson'])

<div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading-{{ $index }}">
        <button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#panelsStayOpen-collapse-{{ $index }}" aria-expanded="true"
            aria-controls="panelsStayOpen-collapse-{{ $index }}">
            {{ $lesson['name'] }}
        </button>
    </h2>
    <div id="panelsStayOpen-collapse-{{ $index }}" class="accordion-collapse collapse show"
        aria-labelledby="panelsStayOpen-heading-{{ $index }}">
        <div class="accordion-body">
            <p><strong>ملقحات الدرس</strong> <a href="/{{ $lesson['pdf'] }}">اضغط هنا</a></p>
            <p><strong>رابط الزوم</strong> <a href="{{ $lesson['zoom_link'] }}">{{ $lesson['zoom_link'] }}</a>
            </p>
            <div class="accordion mt-3 nested-accordion" id="nestedAccordion-{{ $index }}">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="nested-heading-{{ $index }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#nested-collapse-{{ $index }}" aria-expanded="false"
                            aria-controls="nested-collapse-{{ $index }}">
                            الدرس المسجل
                        </button>
                    </h2>
                    <div id="nested-collapse-{{ $index }}" class="accordion-collapse collapse"
                        aria-labelledby="nested-heading-{{ $index }}">
                        <div class="accordion-body">
                            @if (!empty($lesson['video']))
                            <video controls style="width:70%;margin-left:;">
                                <source src="{{asset($lesson['video']) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>