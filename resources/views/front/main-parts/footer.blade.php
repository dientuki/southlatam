<?php 
  use App\Http\Helpers\Helpers;
?>
<footer class="footer">
  <div class="wrapper">
    <div class="footer__top">
      <ul class="footer__column footer__links">
        <?php $pages = Helpers::getFooterPages(); ?>
        @foreach ($pages as $page)
          <?php $route = route('pages', array('slug' => $page->slug, 'locale' => app()->getLocale())); ?>
          <li class="footer__li"><a href="{{ $route }}" class="footer__link">{{ $page->title }}</a></li>
        @endforeach
      </ul>
        <span class="bold block">SouthLatam.com</span>
        Respaldado por Atyca Legajo 13684<br />Buenos Aires, Argentina
     
      <div class="footer__afip text-hidden">
        <a href="#"  class="footer__link fullblock" target="_blank" rel="noopener">{{ __('front.afip') }}</a>
      </div>
    </div>
    <div class="footer__bottom">
      <ul class="footer__socials">
        <li class="footer__sociali"><a class="footer__social_link fullblock flex-center" target="_blank" rel="noopener" href="https://www.facebook.com/viajarporpatagonia">{!! Helpers::load_svg('ico-facebook') !!}</a></li>
        <li class="footer__sociali"><a class="footer__social_link fullblock flex-center" target="_blank" rel="noopener" href="https://www.facebook.com/viajarporpatagonia">{!! Helpers::load_svg('ico-instagram') !!}</a></li>
        <li class="footer__sociali"><a class="footer__social_link fullblock flex-center" target="_blank" rel="noopener" href="https://www.facebook.com/viajarporpatagonia">{!! Helpers::load_svg('ico-skype') !!}</a></li>
      </ul>
    </div>
  </div>
</footer>