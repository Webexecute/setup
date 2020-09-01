  <!-- General JS Scripts -->
  <script src="{{ asset('public/backend/assets/js/app.min.js') }}"></script>
  

  <!-- Template JS File -->
  <script src="{{ asset('public/backend/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('public/backend/assets/bundles/jquery.sparkline.min.js') }}"></script>
  @if (!empty($pluginjs))
  @foreach ($pluginjs as $value)
      <script src="{{ asset('public/backend/assets/'.$value) }}" type="text/javascript"></script>
  @endforeach
@endif

    @if (!empty($js))
    @foreach ($js as $value)
    <script src="{{ asset('public/backend/assets/js/customjs/'.$value) }}" type="text/javascript"></script>
    @endforeach
    @endif
    <script>

            jQuery(document).ready(function () {
            @if (!empty($funinit))
                    @foreach ($funinit as $value)
            {{  $value }}
            @endforeach
                    @endif
            }
            );
    </script>