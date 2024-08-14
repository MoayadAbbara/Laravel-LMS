@extends('layouts.layout')

@section('title' , "منصة المجتهدون - الصفخة الرئيسية")
@section('content')
@include('partial._carousel')

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <x-Services-Card Title="جميع المراحل الدراسية"
                Content="منصتنا تشمل جميع المراحل الدراسية، بدءًا من التعليم الأساسي وحتى التعليم العالي. نقدم محتوى تعليمي شامل يتناسب مع جميع الفئات العمرية والمستويات الأكاديمية."
                IconClass="fa-graduation-cap">
            </x-Services-Card>
            <x-Services-Card Title="دروس مسجلة"
                Content="استمتع بالدروس المسجلة المتوفرة على منصتنا، والتي يمكنك الوصول إليها في أي وقت يناسبك. تتيح لك هذه الدروس التعلم بوتيرة تناسبك مع إمكانية إعادة مشاهدة المحتوى حسب الحاجة."
                IconClass="fa-clapperboard"></x-Services-Card>
            <x-Services-Card Title="كادر مختص"
                Content="يضم فريقنا كادرًا مختصًا من المعلمين والخبراء الأكاديميين، الذين يقدمون محتوى تعليمي عالي الجودة ويعتمدون أحدث الأساليب والتقنيات لضمان تحقيق أفضل نتائج التعلم."
                IconClass="fa-person-chalkboard"></x-Services-Card>
            <x-Services-Card Title="مسابقات ونشاطات"
                Content="اشترك في مسابقات ونشاطات تفاعلية وممتعة تساهم في تعزيز مهاراتك ومعرفتك. توفر منصتنا مجموعة متنوعة من الأنشطة التي تشجع على التفاعل والتعلم النشط."
                IconClass="fa-puzzle-piece"></x-Services-Card>
        </div>
    </div>
</div>


@include('partial._about')



@endsection