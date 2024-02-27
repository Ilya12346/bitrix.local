<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Рецепты");
?>

<section class="recipes-hero top-section container">
  <div class="breadcrumbs">
    <div class="breadcrumbs-wrapper">
      <div class="breadcrumbs-wrapper__row">
        <a class="breadcrumbs__item" href="#">главная</a>
        <div class="breadcrumbs__arrow">
          <svg
            width="9"
            height="14"
            viewbox="0 0 9 14"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M0.501732 0.71693C0.688798 2.76241 1.82258 7.06302 8.00226 7.42407C8.43495 7.44882 8.66756 6.9815 8.3585 6.70488L1.3053 0.390819C0.992979 0.109838 0.465946 0.325304 0.501732 0.71693Z"
              fill="#F64653"
            ></path>
            <path
              d="M0.501732 13.2839C0.688798 11.2384 1.82258 6.9378 8.00226 6.57675C8.43495 6.552 8.66756 7.01934 8.3585 7.29595L1.3053 13.61C0.992979 13.8895 0.465946 13.6755 0.501732 13.2839Z"
              fill="#F64653"
            ></path>
          </svg>
        </div>
        <div class="breadcrumbs__current active">рецепты</div>
      </div>
    </div>
  </div>
  <div class="recipes-hero__top">
    <h1 class="recipes-hero__title">рецепты</h1>
    <div class="title-rombs">
      <div class="title-rombs__item">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="20"
          height="20"
          viewbox="0 0 20 20"
          fill="none"
        >
          <path
            d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
            fill="#F64653"
          ></path>
          <path
            d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
            fill="#F64653"
          ></path>
          <path
            d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
            fill="#F64653"
          ></path>
          <path
            d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
            fill="#F64653"
          ></path>
        </svg>
      </div>
      <div class="title-rombs__item">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="20"
          height="20"
          viewbox="0 0 20 20"
          fill="none"
        >
          <path
            d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
            fill="#F64653"
          ></path>
          <path
            d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
            fill="#F64653"
          ></path>
          <path
            d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
            fill="#F64653"
          ></path>
          <path
            d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
            fill="#F64653"
          ></path>
        </svg>
      </div>
    </div>
  </div>
  <div class="recipes-hero__activity" data-aos="fade-up">
    <div class="recipes-hero__activity-selects">
      <div class="recipes-hero__select desktop">
        <div class="select-wrapper">
          <div class="select">
            <select
              class="select__select"
              style="width: 100%;"
              data-select-placeholder="Тип блюда"
            >
              <option value="" selected="selected" disabled="disabled"></option>
              <option value="Сёмыч">Сёмыч</option>
              <option value="Ладушка">Ладушка</option>
            </select>
          </div>
        </div>
      </div>
      <div class="recipes-hero__select desktop">
        <div class="select-wrapper">
          <div class="select">
            <select
              class="select__select"
              style="width: 100%;"
              data-select-placeholder="Время приготовления"
            >
              <option value="" selected="selected" disabled="disabled"></option>
              <option value="Сёмыч">Сёмыч</option>
              <option value="Ладушка">Ладушка</option>
            </select>
          </div>
        </div>
      </div>
      <div class="recipes-hero__select desktop">
        <div class="select-wrapper">
          <div class="select">
            <select
              class="select__select"
              style="width: 100%;"
              data-select-placeholder="Повод"
            >
              <option value="" selected="selected" disabled="disabled"></option>
              <option value="Сёмыч">Сёмыч</option>
              <option value="Ладушка">Ладушка</option>
            </select>
          </div>
        </div>
      </div>
      <div class="catalog-hero__filters mobile" data-popup="catalog-filters">
        <div class="catalog-hero__filters-icon">
          <svg
            width="18"
            height="18"
            viewbox="0 0 18 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M3.375 9H14.625"
              stroke="#0068FF"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            ></path>
            <path
              d="M9 14.625V3.375"
              stroke="#0068FF"
              stroke-width="1.5"
              stroke-linecap="round"
              stroke-linejoin="round"
            ></path>
          </svg>
        </div>
        <div class="catalog-hero__filters-text">Фильтры</div>
        <div class="catalog-hero__filters-circle">
          <span class="catalog-hero__filters-num">2</span>
        </div>
      </div>
    </div>
    <div class="catalog-hero__reset desktop">
      <div class="catalog-hero__reset-icon">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewbox="0 0 24 24"
          fill="none"
        >
          <path
            d="M4.01269 1.00335C4.01454 0.589137 3.68025 0.251856 3.26604 0.250008C2.85183 0.24816 2.51455 0.582445 2.5127 0.996654L2.50365 3.02568C2.50026 3.78054 2.49744 4.41017 2.55271 4.91635C2.61069 5.44728 2.74029 5.93661 3.06926 6.36169C3.15834 6.4768 3.25638 6.58449 3.36242 6.68379C3.42487 6.74227 3.49008 6.79784 3.55786 6.85029C3.98294 7.17926 4.47227 7.30886 5.0032 7.36684C5.50939 7.42211 6.13896 7.41929 6.89383 7.4159H6.89384L8.9229 7.40685C9.3371 7.405 9.67139 7.06772 9.66954 6.65351C9.66769 6.2393 9.33041 5.90501 8.9162 5.90686L6.93049 5.91572C6.12107 5.91933 5.57738 5.92062 5.16604 5.8757C5.13511 5.87232 5.10551 5.86873 5.07717 5.86494C5.49067 5.39871 5.95055 4.97451 6.44953 4.59962C7.99559 3.43804 9.91636 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12C2.75 11.5858 2.41421 11.25 2 11.25C1.58579 11.25 1.25 11.5858 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25C9.58034 1.25 7.34544 2.05032 5.54852 3.40038C5.00526 3.80854 4.50198 4.26696 4.04555 4.76877L4.04385 4.75351C3.99893 4.34217 4.00022 3.79848 4.00383 2.98906L4.01269 1.00335Z"
            fill="#0068FF"
          ></path>
        </svg>
      </div>
      <div class="catalog-hero__reset-text">Сбросить</div>
    </div>
  </div>
  <div class="recipes-hero__list" data-aos="fade-up">
    <a class="recipes-card" href="#">
      <div class="recipes-card__rect">
        <div class="recipes-card__rect-thumbs">
          <div class="recipes-card__rect-thumb">ужин</div>
          <div class="recipes-card__rect-thumb">23 февраля</div>
        </div>
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img1.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img1.png" />
        </picture>
        <div class="recipes-card__rect-time">
          <div class="recipes-card__rect-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewbox="0 0 24 24"
              fill="none"
            >
              <path
                d="M5.96852 1.83568C6.29197 1.57692 6.34441 1.10495 6.08565 0.781506C5.82689 0.45806 5.35493 0.405619 5.03148 0.664376L2.53148 2.66438C2.20803 2.92313 2.15559 3.3951 2.41435 3.71855C2.67311 4.042 3.14507 4.09444 3.46852 3.83568L5.96852 1.83568Z"
                fill="white"
              ></path>
              <path
                d="M18.9685 0.664376C18.6451 0.405619 18.1731 0.45806 17.9143 0.781506C17.6556 1.10495 17.708 1.57692 18.0315 1.83568L20.5315 3.83568C20.8549 4.09444 21.3269 4.042 21.5857 3.71855C21.8444 3.3951 21.792 2.92313 21.4685 2.66438L18.9685 0.664376Z"
                fill="white"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25003C6.06294 1.25003 1.25 6.06297 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06297 17.9371 1.25003 12 1.25003ZM12.75 8.00003C12.75 7.58582 12.4142 7.25003 12 7.25003C11.5858 7.25003 11.25 7.58582 11.25 8.00003L11.25 11.5C11.25 12.7427 12.2574 13.75 13.5 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H13.5C13.0858 12.25 12.75 11.9142 12.75 11.5L12.75 8.00003Z"
                fill="white"
              ></path>
            </svg>
          </div>
          <p class="recipes-card__rect-text">30 минут</p>
        </div>
      </div>
      <div class="recipes-card__title">
        Быстрое рагу из куриных или утиных сердечек с овощами
      </div> </a
    ><a class="recipes-card" href="#">
      <div class="recipes-card__rect">
        <div class="recipes-card__rect-thumbs">
          <div class="recipes-card__rect-thumb">ужин</div>
          <div class="recipes-card__rect-thumb">23 февраля</div>
        </div>
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img2.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img2.png" />
        </picture>
        <div class="recipes-card__rect-time">
          <div class="recipes-card__rect-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewbox="0 0 24 24"
              fill="none"
            >
              <path
                d="M5.96852 1.83568C6.29197 1.57692 6.34441 1.10495 6.08565 0.781506C5.82689 0.45806 5.35493 0.405619 5.03148 0.664376L2.53148 2.66438C2.20803 2.92313 2.15559 3.3951 2.41435 3.71855C2.67311 4.042 3.14507 4.09444 3.46852 3.83568L5.96852 1.83568Z"
                fill="white"
              ></path>
              <path
                d="M18.9685 0.664376C18.6451 0.405619 18.1731 0.45806 17.9143 0.781506C17.6556 1.10495 17.708 1.57692 18.0315 1.83568L20.5315 3.83568C20.8549 4.09444 21.3269 4.042 21.5857 3.71855C21.8444 3.3951 21.792 2.92313 21.4685 2.66438L18.9685 0.664376Z"
                fill="white"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25003C6.06294 1.25003 1.25 6.06297 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06297 17.9371 1.25003 12 1.25003ZM12.75 8.00003C12.75 7.58582 12.4142 7.25003 12 7.25003C11.5858 7.25003 11.25 7.58582 11.25 8.00003L11.25 11.5C11.25 12.7427 12.2574 13.75 13.5 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H13.5C13.0858 12.25 12.75 11.9142 12.75 11.5L12.75 8.00003Z"
                fill="white"
              ></path>
            </svg>
          </div>
          <p class="recipes-card__rect-text">30 минут</p>
        </div>
      </div>
      <div class="recipes-card__title">
        Быстрое рагу из куриных или утиных сердечек с овощами
      </div> </a
    ><a class="recipes-card" href="#">
      <div class="recipes-card__rect">
        <div class="recipes-card__rect-thumbs">
          <div class="recipes-card__rect-thumb">ужин</div>
          <div class="recipes-card__rect-thumb">23 февраля</div>
        </div>
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img3.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img3.png" />
        </picture>
        <div class="recipes-card__rect-time">
          <div class="recipes-card__rect-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewbox="0 0 24 24"
              fill="none"
            >
              <path
                d="M5.96852 1.83568C6.29197 1.57692 6.34441 1.10495 6.08565 0.781506C5.82689 0.45806 5.35493 0.405619 5.03148 0.664376L2.53148 2.66438C2.20803 2.92313 2.15559 3.3951 2.41435 3.71855C2.67311 4.042 3.14507 4.09444 3.46852 3.83568L5.96852 1.83568Z"
                fill="white"
              ></path>
              <path
                d="M18.9685 0.664376C18.6451 0.405619 18.1731 0.45806 17.9143 0.781506C17.6556 1.10495 17.708 1.57692 18.0315 1.83568L20.5315 3.83568C20.8549 4.09444 21.3269 4.042 21.5857 3.71855C21.8444 3.3951 21.792 2.92313 21.4685 2.66438L18.9685 0.664376Z"
                fill="white"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25003C6.06294 1.25003 1.25 6.06297 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06297 17.9371 1.25003 12 1.25003ZM12.75 8.00003C12.75 7.58582 12.4142 7.25003 12 7.25003C11.5858 7.25003 11.25 7.58582 11.25 8.00003L11.25 11.5C11.25 12.7427 12.2574 13.75 13.5 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H13.5C13.0858 12.25 12.75 11.9142 12.75 11.5L12.75 8.00003Z"
                fill="white"
              ></path>
            </svg>
          </div>
          <p class="recipes-card__rect-text">30 минут</p>
        </div>
      </div>
      <div class="recipes-card__title">
        Быстрое рагу из куриных или утиных сердечек с овощами
      </div> </a
    ><a class="recipes-card" href="#">
      <div class="recipes-card__rect">
        <div class="recipes-card__rect-thumbs">
          <div class="recipes-card__rect-thumb">ужин</div>
          <div class="recipes-card__rect-thumb">23 февраля</div>
        </div>
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img2.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img2.png" />
        </picture>
        <div class="recipes-card__rect-time">
          <div class="recipes-card__rect-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewbox="0 0 24 24"
              fill="none"
            >
              <path
                d="M5.96852 1.83568C6.29197 1.57692 6.34441 1.10495 6.08565 0.781506C5.82689 0.45806 5.35493 0.405619 5.03148 0.664376L2.53148 2.66438C2.20803 2.92313 2.15559 3.3951 2.41435 3.71855C2.67311 4.042 3.14507 4.09444 3.46852 3.83568L5.96852 1.83568Z"
                fill="white"
              ></path>
              <path
                d="M18.9685 0.664376C18.6451 0.405619 18.1731 0.45806 17.9143 0.781506C17.6556 1.10495 17.708 1.57692 18.0315 1.83568L20.5315 3.83568C20.8549 4.09444 21.3269 4.042 21.5857 3.71855C21.8444 3.3951 21.792 2.92313 21.4685 2.66438L18.9685 0.664376Z"
                fill="white"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25003C6.06294 1.25003 1.25 6.06297 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06297 17.9371 1.25003 12 1.25003ZM12.75 8.00003C12.75 7.58582 12.4142 7.25003 12 7.25003C11.5858 7.25003 11.25 7.58582 11.25 8.00003L11.25 11.5C11.25 12.7427 12.2574 13.75 13.5 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H13.5C13.0858 12.25 12.75 11.9142 12.75 11.5L12.75 8.00003Z"
                fill="white"
              ></path>
            </svg>
          </div>
          <p class="recipes-card__rect-text">30 минут</p>
        </div>
      </div>
      <div class="recipes-card__title">
        Быстрое рагу из куриных или утиных сердечек с овощами
      </div> </a
    ><a class="recipes-card" href="#">
      <div class="recipes-card__rect">
        <div class="recipes-card__rect-thumbs">
          <div class="recipes-card__rect-thumb">ужин</div>
          <div class="recipes-card__rect-thumb">23 февраля</div>
        </div>
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img3.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img3.png" />
        </picture>
        <div class="recipes-card__rect-time">
          <div class="recipes-card__rect-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewbox="0 0 24 24"
              fill="none"
            >
              <path
                d="M5.96852 1.83568C6.29197 1.57692 6.34441 1.10495 6.08565 0.781506C5.82689 0.45806 5.35493 0.405619 5.03148 0.664376L2.53148 2.66438C2.20803 2.92313 2.15559 3.3951 2.41435 3.71855C2.67311 4.042 3.14507 4.09444 3.46852 3.83568L5.96852 1.83568Z"
                fill="white"
              ></path>
              <path
                d="M18.9685 0.664376C18.6451 0.405619 18.1731 0.45806 17.9143 0.781506C17.6556 1.10495 17.708 1.57692 18.0315 1.83568L20.5315 3.83568C20.8549 4.09444 21.3269 4.042 21.5857 3.71855C21.8444 3.3951 21.792 2.92313 21.4685 2.66438L18.9685 0.664376Z"
                fill="white"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25003C6.06294 1.25003 1.25 6.06297 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06297 17.9371 1.25003 12 1.25003ZM12.75 8.00003C12.75 7.58582 12.4142 7.25003 12 7.25003C11.5858 7.25003 11.25 7.58582 11.25 8.00003L11.25 11.5C11.25 12.7427 12.2574 13.75 13.5 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H13.5C13.0858 12.25 12.75 11.9142 12.75 11.5L12.75 8.00003Z"
                fill="white"
              ></path>
            </svg>
          </div>
          <p class="recipes-card__rect-text">30 минут</p>
        </div>
      </div>
      <div class="recipes-card__title">
        Быстрое рагу из куриных или утиных сердечек с овощами
      </div> </a
    ><a class="recipes-card" href="#">
      <div class="recipes-card__rect">
        <div class="recipes-card__rect-thumbs">
          <div class="recipes-card__rect-thumb">ужин</div>
          <div class="recipes-card__rect-thumb">23 февраля</div>
        </div>
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img1.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img1.png" />
        </picture>
        <div class="recipes-card__rect-time">
          <div class="recipes-card__rect-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewbox="0 0 24 24"
              fill="none"
            >
              <path
                d="M5.96852 1.83568C6.29197 1.57692 6.34441 1.10495 6.08565 0.781506C5.82689 0.45806 5.35493 0.405619 5.03148 0.664376L2.53148 2.66438C2.20803 2.92313 2.15559 3.3951 2.41435 3.71855C2.67311 4.042 3.14507 4.09444 3.46852 3.83568L5.96852 1.83568Z"
                fill="white"
              ></path>
              <path
                d="M18.9685 0.664376C18.6451 0.405619 18.1731 0.45806 17.9143 0.781506C17.6556 1.10495 17.708 1.57692 18.0315 1.83568L20.5315 3.83568C20.8549 4.09444 21.3269 4.042 21.5857 3.71855C21.8444 3.3951 21.792 2.92313 21.4685 2.66438L18.9685 0.664376Z"
                fill="white"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25003C6.06294 1.25003 1.25 6.06297 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06297 17.9371 1.25003 12 1.25003ZM12.75 8.00003C12.75 7.58582 12.4142 7.25003 12 7.25003C11.5858 7.25003 11.25 7.58582 11.25 8.00003L11.25 11.5C11.25 12.7427 12.2574 13.75 13.5 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H13.5C13.0858 12.25 12.75 11.9142 12.75 11.5L12.75 8.00003Z"
                fill="white"
              ></path>
            </svg>
          </div>
          <p class="recipes-card__rect-text">30 минут</p>
        </div>
      </div>
      <div class="recipes-card__title">
        Быстрое рагу из куриных или утиных сердечек с овощами
      </div> </a
    ><a class="recipes-card" href="#">
      <div class="recipes-card__rect">
        <div class="recipes-card__rect-thumbs">
          <div class="recipes-card__rect-thumb">ужин</div>
          <div class="recipes-card__rect-thumb">23 февраля</div>
        </div>
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img1.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img1.png" />
        </picture>
        <div class="recipes-card__rect-time">
          <div class="recipes-card__rect-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewbox="0 0 24 24"
              fill="none"
            >
              <path
                d="M5.96852 1.83568C6.29197 1.57692 6.34441 1.10495 6.08565 0.781506C5.82689 0.45806 5.35493 0.405619 5.03148 0.664376L2.53148 2.66438C2.20803 2.92313 2.15559 3.3951 2.41435 3.71855C2.67311 4.042 3.14507 4.09444 3.46852 3.83568L5.96852 1.83568Z"
                fill="white"
              ></path>
              <path
                d="M18.9685 0.664376C18.6451 0.405619 18.1731 0.45806 17.9143 0.781506C17.6556 1.10495 17.708 1.57692 18.0315 1.83568L20.5315 3.83568C20.8549 4.09444 21.3269 4.042 21.5857 3.71855C21.8444 3.3951 21.792 2.92313 21.4685 2.66438L18.9685 0.664376Z"
                fill="white"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25003C6.06294 1.25003 1.25 6.06297 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06297 17.9371 1.25003 12 1.25003ZM12.75 8.00003C12.75 7.58582 12.4142 7.25003 12 7.25003C11.5858 7.25003 11.25 7.58582 11.25 8.00003L11.25 11.5C11.25 12.7427 12.2574 13.75 13.5 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H13.5C13.0858 12.25 12.75 11.9142 12.75 11.5L12.75 8.00003Z"
                fill="white"
              ></path>
            </svg>
          </div>
          <p class="recipes-card__rect-text">30 минут</p>
        </div>
      </div>
      <div class="recipes-card__title">
        Быстрое рагу из куриных или утиных сердечек с овощами
      </div> </a
    ><a class="recipes-card" href="#">
      <div class="recipes-card__rect">
        <div class="recipes-card__rect-thumbs">
          <div class="recipes-card__rect-thumb">ужин</div>
          <div class="recipes-card__rect-thumb">23 февраля</div>
        </div>
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img2.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img2.png" />
        </picture>
        <div class="recipes-card__rect-time">
          <div class="recipes-card__rect-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewbox="0 0 24 24"
              fill="none"
            >
              <path
                d="M5.96852 1.83568C6.29197 1.57692 6.34441 1.10495 6.08565 0.781506C5.82689 0.45806 5.35493 0.405619 5.03148 0.664376L2.53148 2.66438C2.20803 2.92313 2.15559 3.3951 2.41435 3.71855C2.67311 4.042 3.14507 4.09444 3.46852 3.83568L5.96852 1.83568Z"
                fill="white"
              ></path>
              <path
                d="M18.9685 0.664376C18.6451 0.405619 18.1731 0.45806 17.9143 0.781506C17.6556 1.10495 17.708 1.57692 18.0315 1.83568L20.5315 3.83568C20.8549 4.09444 21.3269 4.042 21.5857 3.71855C21.8444 3.3951 21.792 2.92313 21.4685 2.66438L18.9685 0.664376Z"
                fill="white"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25003C6.06294 1.25003 1.25 6.06297 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06297 17.9371 1.25003 12 1.25003ZM12.75 8.00003C12.75 7.58582 12.4142 7.25003 12 7.25003C11.5858 7.25003 11.25 7.58582 11.25 8.00003L11.25 11.5C11.25 12.7427 12.2574 13.75 13.5 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H13.5C13.0858 12.25 12.75 11.9142 12.75 11.5L12.75 8.00003Z"
                fill="white"
              ></path>
            </svg>
          </div>
          <p class="recipes-card__rect-text">30 минут</p>
        </div>
      </div>
      <div class="recipes-card__title">
        Быстрое рагу из куриных или утиных сердечек с овощами
      </div> </a
    ><a class="recipes-card" href="#">
      <div class="recipes-card__rect">
        <div class="recipes-card__rect-thumbs">
          <div class="recipes-card__rect-thumb">ужин</div>
          <div class="recipes-card__rect-thumb">23 февраля</div>
        </div>
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img3.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img3.png" />
        </picture>
        <div class="recipes-card__rect-time">
          <div class="recipes-card__rect-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewbox="0 0 24 24"
              fill="none"
            >
              <path
                d="M5.96852 1.83568C6.29197 1.57692 6.34441 1.10495 6.08565 0.781506C5.82689 0.45806 5.35493 0.405619 5.03148 0.664376L2.53148 2.66438C2.20803 2.92313 2.15559 3.3951 2.41435 3.71855C2.67311 4.042 3.14507 4.09444 3.46852 3.83568L5.96852 1.83568Z"
                fill="white"
              ></path>
              <path
                d="M18.9685 0.664376C18.6451 0.405619 18.1731 0.45806 17.9143 0.781506C17.6556 1.10495 17.708 1.57692 18.0315 1.83568L20.5315 3.83568C20.8549 4.09444 21.3269 4.042 21.5857 3.71855C21.8444 3.3951 21.792 2.92313 21.4685 2.66438L18.9685 0.664376Z"
                fill="white"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25003C6.06294 1.25003 1.25 6.06297 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06297 17.9371 1.25003 12 1.25003ZM12.75 8.00003C12.75 7.58582 12.4142 7.25003 12 7.25003C11.5858 7.25003 11.25 7.58582 11.25 8.00003L11.25 11.5C11.25 12.7427 12.2574 13.75 13.5 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H13.5C13.0858 12.25 12.75 11.9142 12.75 11.5L12.75 8.00003Z"
                fill="white"
              ></path>
            </svg>
          </div>
          <p class="recipes-card__rect-text">30 минут</p>
        </div>
      </div>
      <div class="recipes-card__title">
        Быстрое рагу из куриных или утиных сердечек с овощами
      </div> </a
    ><a class="recipes-card" href="#">
      <div class="recipes-card__rect">
        <div class="recipes-card__rect-thumbs">
          <div class="recipes-card__rect-thumb">ужин</div>
          <div class="recipes-card__rect-thumb">23 февраля</div>
        </div>
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img2.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img2.png" />
        </picture>
        <div class="recipes-card__rect-time">
          <div class="recipes-card__rect-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewbox="0 0 24 24"
              fill="none"
            >
              <path
                d="M5.96852 1.83568C6.29197 1.57692 6.34441 1.10495 6.08565 0.781506C5.82689 0.45806 5.35493 0.405619 5.03148 0.664376L2.53148 2.66438C2.20803 2.92313 2.15559 3.3951 2.41435 3.71855C2.67311 4.042 3.14507 4.09444 3.46852 3.83568L5.96852 1.83568Z"
                fill="white"
              ></path>
              <path
                d="M18.9685 0.664376C18.6451 0.405619 18.1731 0.45806 17.9143 0.781506C17.6556 1.10495 17.708 1.57692 18.0315 1.83568L20.5315 3.83568C20.8549 4.09444 21.3269 4.042 21.5857 3.71855C21.8444 3.3951 21.792 2.92313 21.4685 2.66438L18.9685 0.664376Z"
                fill="white"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25003C6.06294 1.25003 1.25 6.06297 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06297 17.9371 1.25003 12 1.25003ZM12.75 8.00003C12.75 7.58582 12.4142 7.25003 12 7.25003C11.5858 7.25003 11.25 7.58582 11.25 8.00003L11.25 11.5C11.25 12.7427 12.2574 13.75 13.5 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H13.5C13.0858 12.25 12.75 11.9142 12.75 11.5L12.75 8.00003Z"
                fill="white"
              ></path>
            </svg>
          </div>
          <p class="recipes-card__rect-text">30 минут</p>
        </div>
      </div>
      <div class="recipes-card__title">
        Быстрое рагу из куриных или утиных сердечек с овощами
      </div> </a
    ><a class="recipes-card" href="#">
      <div class="recipes-card__rect">
        <div class="recipes-card__rect-thumbs">
          <div class="recipes-card__rect-thumb">ужин</div>
          <div class="recipes-card__rect-thumb">23 февраля</div>
        </div>
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img3.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img3.png" />
        </picture>
        <div class="recipes-card__rect-time">
          <div class="recipes-card__rect-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewbox="0 0 24 24"
              fill="none"
            >
              <path
                d="M5.96852 1.83568C6.29197 1.57692 6.34441 1.10495 6.08565 0.781506C5.82689 0.45806 5.35493 0.405619 5.03148 0.664376L2.53148 2.66438C2.20803 2.92313 2.15559 3.3951 2.41435 3.71855C2.67311 4.042 3.14507 4.09444 3.46852 3.83568L5.96852 1.83568Z"
                fill="white"
              ></path>
              <path
                d="M18.9685 0.664376C18.6451 0.405619 18.1731 0.45806 17.9143 0.781506C17.6556 1.10495 17.708 1.57692 18.0315 1.83568L20.5315 3.83568C20.8549 4.09444 21.3269 4.042 21.5857 3.71855C21.8444 3.3951 21.792 2.92313 21.4685 2.66438L18.9685 0.664376Z"
                fill="white"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25003C6.06294 1.25003 1.25 6.06297 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06297 17.9371 1.25003 12 1.25003ZM12.75 8.00003C12.75 7.58582 12.4142 7.25003 12 7.25003C11.5858 7.25003 11.25 7.58582 11.25 8.00003L11.25 11.5C11.25 12.7427 12.2574 13.75 13.5 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H13.5C13.0858 12.25 12.75 11.9142 12.75 11.5L12.75 8.00003Z"
                fill="white"
              ></path>
            </svg>
          </div>
          <p class="recipes-card__rect-text">30 минут</p>
        </div>
      </div>
      <div class="recipes-card__title">
        Быстрое рагу из куриных или утиных сердечек с овощами
      </div> </a
    ><a class="recipes-card" href="#">
      <div class="recipes-card__rect">
        <div class="recipes-card__rect-thumbs">
          <div class="recipes-card__rect-thumb">ужин</div>
          <div class="recipes-card__rect-thumb">23 февраля</div>
        </div>
        <picture class="picture">
          <source type="image/webp" srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img1.webp" />
          <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/resipes-img1.png" />
        </picture>
        <div class="recipes-card__rect-time">
          <div class="recipes-card__rect-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewbox="0 0 24 24"
              fill="none"
            >
              <path
                d="M5.96852 1.83568C6.29197 1.57692 6.34441 1.10495 6.08565 0.781506C5.82689 0.45806 5.35493 0.405619 5.03148 0.664376L2.53148 2.66438C2.20803 2.92313 2.15559 3.3951 2.41435 3.71855C2.67311 4.042 3.14507 4.09444 3.46852 3.83568L5.96852 1.83568Z"
                fill="white"
              ></path>
              <path
                d="M18.9685 0.664376C18.6451 0.405619 18.1731 0.45806 17.9143 0.781506C17.6556 1.10495 17.708 1.57692 18.0315 1.83568L20.5315 3.83568C20.8549 4.09444 21.3269 4.042 21.5857 3.71855C21.8444 3.3951 21.792 2.92313 21.4685 2.66438L18.9685 0.664376Z"
                fill="white"
              ></path>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12 1.25003C6.06294 1.25003 1.25 6.06297 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06297 17.9371 1.25003 12 1.25003ZM12.75 8.00003C12.75 7.58582 12.4142 7.25003 12 7.25003C11.5858 7.25003 11.25 7.58582 11.25 8.00003L11.25 11.5C11.25 12.7427 12.2574 13.75 13.5 13.75H15C15.4142 13.75 15.75 13.4142 15.75 13C15.75 12.5858 15.4142 12.25 15 12.25H13.5C13.0858 12.25 12.75 11.9142 12.75 11.5L12.75 8.00003Z"
                fill="white"
              ></path>
            </svg>
          </div>
          <p class="recipes-card__rect-text">30 минут</p>
        </div>
      </div>
      <div class="recipes-card__title">
        Быстрое рагу из куриных или утиных сердечек с овощами
      </div>
    </a>
  </div>
  <div class="recipes-hero__more btn-hover_parent">
    <div class="btn-hover_circle"></div>
    <p>Показать еще</p>
  </div>
</section>
<div class="container">
  <section class="section-mailing news-content__mailing" data-aos="fade-up">
    <div class="section-mailing__bg desktop">
      <picture class="picture">
        <source
          type="image/webp"
          srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg.webp"
        />
        <img class="picture__img" src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg.png" />
      </picture>
    </div>
    <div class="section-mailing__bg device-bg">
      <picture class="picture">
        <source
          type="image/webp"
          srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg-device.webp"
        />
        <img
          class="picture__img"
          src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg-device.png"
        />
      </picture>
    </div>
    <div class="section-mailing__bg mobile-bg">
      <picture class="picture">
        <source
          type="image/webp"
          srcset="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg-mobile.webp"
        />
        <img
          class="picture__img"
          src="<?php echo SITE_TEMPLATE_PATH ?>/assets/images/section-mailing-bg-mobile.png"
        />
      </picture>
    </div>
    <div class="section-mailing__content">
      <div class="section-mailing__title">
        подпишитесь на нас, чтобы быть в&nbsp;курсе
      </div>
      <form class="section-mailing__form" data-parsley-validate="">
        <div class="section-mailing__form-container">
          <div class="input-wrapper" data-input-parent="">
            <div class="input-wrapper__placeholder">E-mail</div>
            <input
              class="input"
              data-input=""
              required
              type="email"
              placeholder="E-mail"
            />
          </div>
        </div>
        <button
          class="section-mailing__form-button btn-hover_parent"
          type="submit"
        >
          <div class="btn-hover_circle"></div>
          <span>Подписаться</span>
        </button>
      </form>
      <div class="section-mailing__policy">
        Нажимая на кнопку «Отправить», вы даете согласие с&nbsp;<a href="#"
          >политикой в&nbsp;отношении обработки персональных данных</a
        >
      </div>
    </div>
  </section>
</div>
<div
  class="popup popup-subscribe"
  data-popup-wrapper="subscribe-complete"
  data-overlay-on
  data-popup-fade
>
  <div class="popup-subscribe__close" data-popup-close="subscribe-complete">
    <div class="btn-hover_parent">
      <div class="btn-hover_circle white"></div>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewbox="0 0 24 24"
        fill="none"
      >
        <path
          d="M6.69678 6.69671L17.3034 17.3033"
          stroke="#0068FF"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
        <path
          d="M6.69662 17.3033L17.3032 6.69671"
          stroke="#0068FF"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
      </svg>
    </div>
  </div>
  <div class="popup-subscribe__inner">
    <div class="popup-subscribe__send-logo">
      <svg
        width="100"
        height="99"
        viewbox="0 0 100 99"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M35.2969 11.3709C39.5183 -3.42101 60.4814 -3.42101 64.7028 11.3709C66.0509 16.0947 70.9041 18.8967 75.669 17.7023C90.5899 13.9622 101.071 32.1167 90.372 43.1685C86.9551 46.6979 86.9551 52.3018 90.372 55.8312C101.071 66.883 90.5899 85.0376 75.669 81.2975C70.9041 80.1031 66.0509 82.905 64.7028 87.6288C60.4814 102.421 39.5183 102.421 35.2969 87.6288C33.9488 82.905 29.0957 80.1031 24.3307 81.2975C9.40981 85.0376 -1.07173 66.883 9.62775 55.8312C13.0446 52.3018 13.0446 46.6979 9.62776 43.1685C-1.07173 32.1167 9.40981 13.9622 24.3307 17.7023C29.0957 18.8967 33.9488 16.0947 35.2969 11.3709ZM68.8767 39.1055C69.9705 37.7929 69.7932 35.8421 68.4806 34.7482C67.168 33.6544 65.2172 33.8317 64.1233 35.1443L49.8361 52.2889C48.3066 54.1244 47.3674 55.2399 46.5936 55.9386C46.2347 56.2626 46.0219 56.3918 45.9198 56.4411C45.8991 56.4512 45.8843 56.4572 45.875 56.4607C45.8657 56.4572 45.8509 56.4512 45.8302 56.4411C45.7281 56.3918 45.5153 56.2626 45.1564 55.9386C44.3827 55.2399 43.4434 54.1244 41.9139 52.2889L35.8767 45.0443C34.7828 43.7317 32.832 43.5544 31.5194 44.6482C30.2068 45.7421 30.0295 47.6929 31.1233 49.0055L37.2922 56.4082C38.6472 58.0345 39.8686 59.5006 41.0096 60.5308C42.251 61.6518 43.8146 62.6502 45.875 62.6502C47.9354 62.6502 49.499 61.6518 50.7404 60.5308C51.8814 59.5006 53.1028 58.0345 54.4577 56.4082L68.8767 39.1055Z"
          fill="#00FFE0"
        ></path>
      </svg>
    </div>
    <div class="popup-subscribe__text">Подписка успешно оформлена</div>
    <div
      class="popup-subscribe__button btn-hover_parent"
      data-popup-close="subscribe-complete"
    >
      <div class="btn-hover_circle"></div>
      <span>Закрыть</span>
    </div>
  </div>
</div>
<div
  class="popup-filters mobile"
  data-popup-wrapper="catalog-filters"
  data-overlay-on
>
  <div
    class="popup-filters__close popup-video__close"
    data-popup-close="catalog-filters"
  >
    <div class="btn-hover_parent">
      <div class="btn-hover_circle white"></div>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewbox="0 0 24 24"
        fill="none"
      >
        <path
          d="M6.69678 6.69671L17.3034 17.3033"
          stroke="#0068FF"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
        <path
          d="M6.69662 17.3033L17.3032 6.69671"
          stroke="#0068FF"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
      </svg>
    </div>
  </div>
  <div class="popup-filters__top">
    <div class="popup-filters__title">фильтры</div>
    <div class="popup-filters__selects">
      <div class="catalog-hero__select">
        <div class="select-wrapper">
          <div class="select">
            <select
              class="select__select"
              style="width: 100%;"
              data-select-placeholder="Тип блюда"
            >
              <option value="" selected="selected" disabled="disabled"></option>
              <option value="Сёмыч">Сёмыч</option>
              <option value="Ладушка">Ладушка</option>
            </select>
          </div>
        </div>
      </div>
      <div class="catalog-hero__select">
        <div class="select-wrapper">
          <div class="select">
            <select
              class="select__select"
              style="width: 100%;"
              data-select-placeholder="Время приготовления"
            >
              <option value="" selected="selected" disabled="disabled"></option>
              <option value="Жирность1">Жирность1</option>
              <option value="Жирность2">Жирность2</option>
            </select>
          </div>
        </div>
      </div>
      <div class="catalog-hero__select">
        <div class="select-wrapper">
          <div class="select">
            <select
              class="select__select"
              style="width: 100%;"
              data-select-placeholder="Повод"
            >
              <option value="" selected="selected" disabled="disabled"></option>
              <option value="Жирность1">Жирность1</option>
              <option value="Жирность2">Жирность2</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="popup-filters__bot">
    <div class="popup-filters__bot-reset">
      <div class="catalog-hero__reset">
        <div class="catalog-hero__reset-icon">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewbox="0 0 24 24"
            fill="none"
          >
            <path
              d="M4.01269 1.00335C4.01454 0.589137 3.68025 0.251856 3.26604 0.250008C2.85183 0.24816 2.51455 0.582445 2.5127 0.996654L2.50365 3.02568C2.50026 3.78054 2.49744 4.41017 2.55271 4.91635C2.61069 5.44728 2.74029 5.93661 3.06926 6.36169C3.15834 6.4768 3.25638 6.58449 3.36242 6.68379C3.42487 6.74227 3.49008 6.79784 3.55786 6.85029C3.98294 7.17926 4.47227 7.30886 5.0032 7.36684C5.50939 7.42211 6.13896 7.41929 6.89383 7.4159H6.89384L8.9229 7.40685C9.3371 7.405 9.67139 7.06772 9.66954 6.65351C9.66769 6.2393 9.33041 5.90501 8.9162 5.90686L6.93049 5.91572C6.12107 5.91933 5.57738 5.92062 5.16604 5.8757C5.13511 5.87232 5.10551 5.86873 5.07717 5.86494C5.49067 5.39871 5.95055 4.97451 6.44953 4.59962C7.99559 3.43804 9.91636 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12C2.75 11.5858 2.41421 11.25 2 11.25C1.58579 11.25 1.25 11.5858 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25C9.58034 1.25 7.34544 2.05032 5.54852 3.40038C5.00526 3.80854 4.50198 4.26696 4.04555 4.76877L4.04385 4.75351C3.99893 4.34217 4.00022 3.79848 4.00383 2.98906L4.01269 1.00335Z"
              fill="#0068FF"
            ></path>
          </svg>
        </div>
        <div class="catalog-hero__reset-text">Сбросить</div>
      </div>
    </div>
    <div class="popup-filters__bot-line"></div>
    <div class="popup-filters__bot-btn">
      <div class="popup-filters__button">Применить</div>
    </div>
  </div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>