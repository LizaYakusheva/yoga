@extends('theme')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
    />

    <style>
        .swiper {
            height: 300px;
        }

        .swiper-slide {
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-button-next,
        .swiper-button-prev {
            width: 24px;
            height: 24px;

            color: rgba(0, 0, 0, .5);
        }
    </style>
@endpush

@section('banner')
    <section class="banner">
        <h1>
            <span class="text-shadow">GONG YOGA</span>
            <span class="text-gradient">GONG YOGA</span>
        </h1>

        <p>Чистота разума, гибкость тела, внутренняя гармония</p>
        <a href="{{ route('events.index') }}" class="btn">Записаться</a>
    </section>
@endsection

@section('content')
    <div class="d-flex flex-column gap-4 my-4">
        <div class="row align-items-center g-3">
            <div class="col-sm-12 col-lg-6">
                <div class="img-container">
                    <img src="{{ asset('img/studio.png') }}" alt="Студия" class="rounded-50">
                </div>
            </div>

            <div class="col-sm-12 col-lg-6">
                <h2>О студии</h2>

                <p>
                    GongYoga — это пространство для глубокой работы с телом и сознанием через кундалини йогу и
                    звукотерапию. Мы используем мощные вибрации гонгов и поющих чаш, чтобы помочь вам достичь состояния
                    полного расслабления, снять накопленный стресс и восстановить энергетический баланс.
                </p>

                <p>
                    Наша миссия — создать безопасную и поддерживающую среду, где каждый человек может замедлиться,
                    услышать себя и найти внутренние ресурсы для гармоничной жизни.
                </p>
            </div>
        </div>

        <div class="row align-items-center g-3 flex-row-reverse">
            <div class="col-sm-12 col-lg-6">
                <div class="img-container">
                    <img src="img/teachers.png" alt="Преподаватели">
                </div>
            </div>

            <div class="col-sm-12 col-lg-6">
                <h2>О преподавателях</h2>

                <p>
                    Наши инструкторы — сертифицированные специалисты с многолетним опытом практики в области кундалини
                    йоги, медитации и звуковой терапии. Каждый преподаватель имеет уникальный стиль, но всех нас
                    объединяет глубокое уважение к традициям йоги и искреннее желание помочь ученикам на их пути. Мы
                    регулярно повышаем квалификацию, чтобы предлагать вам самые эффективные и безопасные методики.
                </p>
            </div>
        </div>

        <div class="row align-items-center g-3">
            <div class="col-sm-12 col-lg-6">
                <div class="img-container">
                    <img src="img/practices.png" alt="Практики">
                </div>
            </div>

            <div class="col-sm-12 col-lg-6">
                <h2>О практиках</h2>

                <p>
                    В нашем расписании вы найдете занятия для любого уровня подготовки: от мягких утренних практик
                    хатха-йоги до интенсивных курсов виньяса-флоу и восстановительной йога-терапии. Мы также проводим
                    специальные сеансы йога-нидры и медитации, которые помогают перезагрузить нервную систему и улучшить
                    качество сна. Каждая практика — это шаг к лучшей версии себя.
                </p>
            </div>
        </div>
    </div>


    <form class="start" id="startForm" action="{{ route('calls.store') }}" method="post">
        @csrf
        <div class="header">
            <h2>Не знаете, с чего начать?</h2>
            <p>Заполните форму ниже, мы свяжемся с Вами и поможем подобрать направление</p>
        </div>

        <div class="fields">
            <input type="text" name="name" id="name" placeholder="Имя">
            <input type="tel" name="phone" id="phone_number" placeholder="Номер телефона">
            <button type="submit" class="btn" id="btn">Отправить</button>
        </div>
    </form>

    <div id="modal">
        <div id="window">
            <img src="img/icons/Checkmark.png" alt="checkmark" id="checkmark">
            <p class="p_modal">Ваш запрос принят!</p>
            <p class="p_modal">Наш администратор свяжется с вами</p>
            <button id="closeModal">Закрыть</button>
        </div>
    </div>

    <h2 class="text-center my-5">Что о нас говорят клиенты?</h2>

    @if($reviews->isNotEmpty())
        <div class="mb-4">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach($reviews as $review)
                        <div class="swiper-slide">
                            <div class="reviews__item mb-2">
                                <div class="reviews__header">
                                    <h3 class="reviews__author">{{ $review->user->name }}</h3>
                                    <div class="reviews__rating-value">
                                        @for($i = 0; $i < $review->rating; $i++)
                                            <span class="star">★</span>
                                        @endfor
                                        @for($i = $review->rating; $i < 5; $i++)
                                            <span class="star" style="color: #ddd;">★</span>
                                        @endfor
                                    </div>
                                </div>
                                <p class="reviews__text">{{ \Illuminate\Support\Str::limit($review->review, 126) }}</p>
                                <p class="reviews__text mt-2">{{ date_format($review->created_at, 'd/m/y') }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    @endif

    <div class="review-container m-auto mb-5">
        <h2 class="review-title">Оставить отзыв</h2>

        <form action="{{ route('reviews.store') }}" method="post" class="review-form">
            @csrf

            <!-- Рейтинг (Звезды) -->
            <div class="form-group d-flex rating-group">
                <span class="rating-label">Оценка:</span>
                <div class="stars-wrapper">
                    <!-- Порядок важен: от 5 до 1 для работы CSS селектора ~ -->
                    <input type="radio" name="rating" id="star5" value="5" required>
                    <label for="star5" title="Отлично">★</label>

                    <input type="radio" name="rating" id="star4" value="4">
                    <label for="star4" title="Хорошо">★</label>

                    <input type="radio" name="rating" id="star3" value="3">
                    <label for="star3" title="Нормально">★</label>

                    <input type="radio" name="rating" id="star2" value="2">
                    <label for="star2" title="Плохо">★</label>

                    <input type="radio" name="rating" id="star1" value="1">
                    <label for="star1" title="Ужасно">★</label>
                </div>
            </div>

            <!-- Поле Текст -->
            <div class="form-group d-flex">
                    <textarea id="review-text" name="review" class="form-input form-textarea" rows="4" placeholder=" "
                              required></textarea>
                <label for="review-text" class="form-label">Расскажите о впечатлениях</label>
            </div>

            <!-- Кнопка -->
            <button type="submit" class="btn w-100 fw-medium py-2">
                Отправить отзыв
            </button>
        </form>
    </div>

    <section class="location">
        <h2>Как нас найти?</h2>
        <p>г.Абакан ул.Крылова,112</p>
        <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A33dbf5cd71623f96c2d4bd6b5b3b1c54c5c13b02092f247baabe6d78c26ca2e6&amp;width=100%25&amp;height=530&amp;lang=ru_RU&amp;scroll=true"></script>
    </section>
@endsection
@push('scripts')
    <script>
        document.querySelectorAll('.reviews__rating-star input').forEach(star => {
            star.addEventListener('change', function () {
                const value = parseInt(this.value);
                const stars = this.closest('.reviews__rating-stars').querySelectorAll('.reviews__rating-star label');

                stars.forEach((starLabel, index) => {
                    const starValue = 5 - index;
                    if (starValue <= value) {
                        starLabel.style.color = '#ffc107';
                    } else {
                        starLabel.style.color = '#ddd';
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            spaceBetween: 50,
            initialSlide: 1,
            centeredSlides: true,
            effect: "coverflow",
            coverflowEffect: {
                rotate: 0,
                stretch: 50,
                depth: 200,
                slideShadows: false
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            breakpoints: {
                576: {
                    slidesPerView: 1.5,
                },
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 2.5,
                }
            }
        });
    </script>
@endpush
