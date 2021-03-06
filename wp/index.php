<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP
 */

get_header();
?>
<main>
		<section class="features">
			<div class="container">
				<div class="features__inner">
					<div class="fetures__left">
						<img src="images/safe.svg" alt="" class="features-img">
						<div class="features-liteTitle">Real-time all the time</div>
						<div class="features-text">Thus much I thought proper to tell you in relation to yourself, and
							to the trust I reposed in you.
							<br><br>
							Just then her head struck against the roof of the hall: in fact she was now more than nine
							feet high, and she at once took up the little golden key and hurried off to the garden door.
						</div>
					</div>
					<div class="fetures__right">
						<img src="images/alarm-clock.svg" alt="" class="features-img">
						<div class="features-liteTitle">Adopt without any obstacles</div>
						<div class="features-text">This sounded a very good reason, and Alice was quite pleased to know
							it. 'I never thought of that before!' she said.
							<br><br>
							This I have produced as a scantling of Jack’s great eloquence and the force of his reasoning
							upon such abstruse matters.
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="iphoneFetures">
			<div class="container">
				<div class="iphoneFetures__inner">
					<img src="images/iPhone 6.png" alt="" class="iphoneFetures-img">
					<div class="iphoneFetures__content">
						<div class="iphoneFetures__content-title title">Your day is protected</div>
						<div class="iphoneFetures__content-text">There have not been any since we have lived here, said
							my mother. <br><br>
							We thought - Mr. Copperfield thought - it was quite a large rookery; but the nests were very
							old ones, and the birds have deserted them a long while.</div>

						<div class="iphoneFetures__content__buttons">
							<a href="#" class="iphoneFetures__content__buttons-btnOne blue_btn">Try to hack us <img
									src="images/right-arrow.svg" alt="" class="iphoneFetures__content__buttons-img"></a>
							<a href="#" class="iphoneFetures__content__buttons-btnTwo btn">Learn more</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="map">
			<div class="container">
				<div class="map__inner">
					<div class="map__content">
						<div class="map__content-title title">We are almost everywhere</div>
						<div class="map__content-text">Now the races of these two have been for some ages utterly
							extinct, and besides to discourse any further of them would not be at all to my purpose.
							<br><br>
							Thus much I thought proper to tell you in relation to yourself, and to the trust I reposed
							in you.
						</div>

						<span class="map__content-partners_title">parners</span>
						<div class="map__content-partners">
							<img src="images/DropBox.png" alt="" class="map__content-partners-partner">
							<img src="images/Evernote.png" alt="" class="map__content-partners-partner">
						</div>
					</div>

					<img src="images/World Map.png" class="map-worldMap">
				</div>
			</div>
		</section>
		<!-- Beautiful Interface -->
		<section class="BI">

			<div class="BI__inner">
				<div class="BI-title title">Beautiful Interface</div>
				<div class="BI-text">Landing Screen</div>
				<div class="owl-carousel owl-theme" id="carousel1">
					<div><img src="images/slidr/3.png" class="BI-item"></div>
					<div><img src="images/slidr/4.png" class="BI-item"></div>
					<div><img src="images/slidr/5.png" class="BI-item"></div>
					<div><img src="images/slidr/1.png" class="BI-item"></div>
					<div><img src="images/slidr/2.png" class="BI-item"></div>
				</div>
			</div>
		</section>
		<section class="buy">
			<div class="container">
				<div class="buy__inner">
					<div class="buy-subtitle">Newprovidence</div>
					<div class="buy-title title">Get it to your smartphone</div>
					<form action="" class="buy-form">
						<input type="text" name="" class="buy-input" placeholder="denis@getcraftwork.com">
						<button class="buy-formBtn btn">Send Invite<img src="images/right-arrow.svg" alt=""
								class="buy-img"></button>
					</form>

					<div class="buy-subtitle">Or downlod from</div>

					<button class="appStore-btn btn"><img src="images/apple-logo.svg" class="buy-appleLogo">
						<div class="buy-btn_text">Download on the <span class="buy-appStore">App Store</span></div>
					</button>

				</div>
			</div>
		</section>
		<section class="customers">
			<div class="container">
				<div class="customers__inner">
					<div class="customers_carousel1" id="customers_carousel1">
						<div class="customers__item">
							<img src="images/customers/customer2.png" alt="" class="customers__item-img">
						</div>
						<div class="customers__item">
							<img src="images/customers/customer3.png" alt="" class="customers__item-img">
						</div>
						<div class="customers__item">
							<img src="images/customers/customer1.png" alt="" class="customers__item-img">
						</div>
						<div class="customers__item">
							<img src="images/customers/customer1.png" alt="" class="customers__item-img">
						</div>
					</div>
					<div class="customers_carousel2" id="customers_carousel2">
						<div class="customers__item">
							<div class="customers__item-title">1New Providence is the great UL kit</div>
							<div class="customers__item-text"><span class="notClick">“</span>Just then her head struck
								against the roof of the hall: in fact she was now more than nine feet high, and she at
								once took up the little golden key and hurried off to the garden door.<span
									class="notClick">”</span></div>

							<div class="customers__item__stars">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
							</div>

							<div class="customers__item-name">Cameron Dowman</div>
						</div>
						<div class="customers__item">
							<div class="customers__item-title">2New Providence is the great UL kit</div>
							<div class="customers__item-text"><span class="notClick">“</span>Just then her head struck
								against the roof of the hall: in fact she was now more than nine feet high, and she at
								once took up the little golden key and hurried off to the garden door.<span
									class="notClick">”</span></div>

							<div class="customers__item__stars">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
							</div>

							<div class="customers__item-name">Cameron Dowman</div>
						</div>
						<div class="customers__item">
							<div class="customers__item-title">3New Providence is the great UL kit</div>
							<div class="customers__item-text"><span class="notClick">“</span>Just then her head struck
								against the roof of the hall: in fact she was now more than nine feet high, and she at
								once took up the little golden key and hurried off to the garden door.<span
									class="notClick">”</span></div>

							<div class="customers__item__stars">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
							</div>

							<div class="customers__item-name">Cameron Dowman</div>
						</div>
						<div class="customers__item">
							<div class="customers__item-title">4New Providence is the great UL kit</div>
							<div class="customers__item-text"><span class="notClick">“</span>Just then her head struck
								against the roof of the hall: in fact she was now more than nine feet high, and she at
								once took up the little golden key and hurried off to the garden door.<span
									class="notClick">”</span></div>

							<div class="customers__item__stars">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
								<img src="images/star.svg" alt="star" class="customers__item__stars-star">
							</div>

							<div class="customers__item-name">Cameron Dowman</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="paln">
			<div class="container">
				<div class="plan__inner">
					<div class="plan__choose">
						<div class="plan__choose-title title">Choose your perfect plan</div>

						<div class="plan__choose__form">
							<div class="plan__choose__form-title title">You are</div>

							<div class="toggle-button-cover">
								<div class="button-cover">
									<div class="button r" id="button-3">
										<input type="checkbox" class="checkbox" placeholder="">
										<div class="knobs"></div>
										<div class="layer"></div>
									</div>
									<span class="Individual">Individual</span>
									<span class="Company">Company</span>
								</div>
							</div>
						</div>

						<div class="plan__choose-text">Thus much I thought proper to tell you in relation to yourself,
							and to the trust I reposed in you.</div>
						<div class="plan__choose-subtext">Have a bigger team? <a href="#"
								class="plan__choose-subtext_link">Let's talk</a></div>
					</div>
					<div class="plan__pack">
						<div class="plan__pack__item">
							<div class="plan__pack__item-title">Starter</div>
							<div class="plan__pack__item-cost">Free</div>
							<div class="plan__pack__item-text">Build your schedule evety day</div>
							<div class="plan__pack__item-pluses"><img src="images/tick-sign.svg" alt=""
									class="plan-img">Unlimited events</div>
							<div class="plan__pack__item-pluses"><img src="images/tick-sign.svg" alt=""
									class="plan-img">Connect Dropbox & Evernote</div>

							<button class="plan__pack__item-btn blue_btn btn">Get started</button>
						</div>
						<div class="plan__pack__item_pro">
							<div class="plan__pack__item-title">Pro</div>
							<div class="plan__pack__item-cost">$4.99</div>
							<div class="plan__pack__item-text">Make tour life better</div>
							<div class="plan__pack__item-pluses"><img src="images/tick-sign.svg" alt=""
									class="plan-img">Unlimited events</div>
							<div class="plan__pack__item-pluses"><img src="images/tick-sign.svg" alt=""
									class="plan-img">Connect Dropbox & Evernote</div>
							<div class="plan__pack__item-pluses"><img src="images/tick-sign.svg" alt=""
									class="plan-img">Personal Assistant</div>

							<button class="plan__pack__item-btn_pro blue_btn btn">Make me a Pro</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="subs">
			<div class="container">
				<div class="subs__inner">
					<div class="subs-title title">Subscribe our newsletters</div>

					<form action="" class="subs__form">
						<input type="text" class="subs__form-input" placeholder="Your e-mail">
						<button class="subs__form-btn btn">Subscribe</button>
					</form>

					<div class="subs-text">We promise to never spam you.</div>
				</div>
			</div>
		</section>
	</main>

<?php
get_sidebar();
get_footer();
