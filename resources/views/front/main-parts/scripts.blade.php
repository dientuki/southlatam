<?php



$ga = Helpers::getThirdParty('analytics')
?>

@if ($ga != false)
  {!! $ga !!}
@endif