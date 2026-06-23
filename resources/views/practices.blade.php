@extends('theme')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/practices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
@endpush
@section('content')
    <h2 class="mb-4 mt-4">Практики</h2>

    <div class="slider-container">
        <div class="slider">
            <div class="slide"><img src="img/slider1.JPG" alt=""></div>
            <div class="slide"><img src="img/teachers.png" alt=""></div>
            <div class="slide"><img src="img/slide3.JPG" alt=""></div>
        </div>
        <div class="slider-indicators">
            <span class="indicator active"></span>
            <span class="indicator"></span>
            <span class="indicator"></span>
        </div>
    </div>

    <div class="d-flex flex-column gap-4 my-4">
        <div class="row align-items-center g-3">
            <div class="col-sm-12 col-lg-6">
                <h2>Основы хатха-йоги</h2>

                <p>
                    Базовый курс для начинающих, направленный на гармоничное развитие тела и духа. Вы изучите основные
                    асаны, техники правильного дыхания и фундаментальные принципы йоги. Эта практика поможет укрепить
                    физическую форму, улучшить гибкость и найти внутренний баланс.
                </p>

                <p>Наша миссия</p>

                <p>В GongYoga мы стремимся создать пространство, где каждый может найти свой путь к самопознанию и
                    самосовершенствованию.</p>
            </div>

            <div class="col-sm-12 col-lg-6">
                <div class="img-container">
                    <img src="{{ asset('img/studio.png') }}" alt="Студия" class="rounded-50">
                </div>
            </div>
        </div>

        <div class="row align-items-center g-3 flex-row-reverse">
            <div class="col-sm-12 col-lg-6">
                <h2>Виньяса-флоу продвинутый уровень</h2>

                <p>
                    Интенсивный динамический курс для опытных практиков. Плавные переходы между асанами в ритме дыхания
                    развивают выносливость, силу и концентрацию. Идеально подходит для тех, кто хочет углубить свою
                    практику и выйти на новый уровень физического и энергетического развития.
                </p>
            </div>

            <div class="col-sm-12 col-lg-6">
                <div class="img-container">
                    <img src="{{ asset('img/teachers.png') }}" alt="Преподаватели">
                </div>
            </div>
        </div>

        <div class="row align-items-center g-3">
            <div class="col-sm-12 col-lg-6">
                <h2>Йога-терапия и восстановление</h2>

                <p>
                    Специализированный терапевтический курс для работы с проблемами спины, суставов и снятия стресса.
                    Мягкие техники и осознанный подход помогают восстановить здоровье, избавиться от хронических
                    напряжений и вернуть телю естественную подвижность и легкость.
                </p>
            </div>

            <div class="col-sm-12 col-lg-6">
                <div class="img-container">
                    <img src="{{ asset('img/practices.png') }}" alt="Практики">
                </div>
            </div>
        </div>
    </div>

    <section class="mt-5">
        <h2 class="section-title">Йога — это путь к себе</h2>

        <p class="section-intro">
            Йога — это не просто физическая практика. Это философия, которая объединяет тело, разум и дух.
            В нашем центре мы предлагаем вам погрузиться в эту древнюю дисциплину — для гармонии и внутреннего
            спокойствия.
        </p>

        <div class="info-block">
            <h3>Для всех уровней подготовки</h3>
            <p>Неважно, новичок вы или опытный практик — у нас найдётся место для каждого. Наши инструкторы помогут
                освоить технику и найти свой собственный путь.</p>
        </div>

        <div class="info-block">
            <h3>Наши направления</h3>
            <ul class="directions-list">
                <li><strong>Хатха-йога</strong> — укрепление тела и расслабление ума.</li>
                <li><strong>Кундалини-йога</strong> — пробуждение энергии и духовное развитие.</li>
                <li><strong>Медитация</strong> — концентрация и внутренний покой.</li>
            </ul>
        </div>

        <div class="d-flex flex-column align-items-center">
            <p class="section-intro">Запишитесь на занятие — почувствуйте атмосферу центра и узнайте больше о
                йоге.</p>
            <a href="{{ route('events.index') }}" class="btn-enroll">Открыть расписание</a>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/slider.js') }}"></script>
@endpush
