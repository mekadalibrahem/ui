@props(['type' => 'info', 'title' , 'list'])

@if (!empty($title) || !empty($type) || !empty($list))
    @switch($type)
        @case('info')
            <div role="alert"
                {{ $attributes->merge(['class' => 'p-4 mb-4 text-sm text-primary-800 rounded-lg bg-primary-100 dark:bg-gray-800 dark:text-primary-400']) }}>
                <div>
                    <span class="font-medium">{{$title}}</span>
                      <ul class="mt-1.5 list-disc list-inside">
                        @foreach ( $list as $item )
                            <li>
                                {{$item}}
                            </li>
                        @endforeach
                    </ul>
                  </div>
            </div>
        @break

        @case('danger')
            <div role="alert"
                {{ $attributes->merge(['class' => 'p-4 mb-4 text-sm text-danger-800 rounded-lg bg-danger-50 dark:bg-gray-800 dark:text-danger-400']) }}>
                <div>
                    <span class="font-medium">{{$title}}</span>
                    <ul class="mt-1.5 list-disc list-inside">
                      @foreach ( $list as $item )
                          <li>
                              {{$item}}
                          </li>
                      @endforeach
                  </ul>
                  </div>
            </div>
        @break

        @case('success')
            <div role="alert"
                {{ $attributes->merge(['class' => ' p-4 mb-4 text-sm text-sucsses-800 rounded-lg bg-sucsses-50 dark:bg-gray-800 dark:text-sucsses-400']) }}>
                <div>
                    <span class="font-medium">Ensure that these requirements are met:</span>
                    <span class="font-medium">{{$title}}</span>
                    <ul class="mt-1.5 list-disc list-inside">
                      @foreach ( $list as $item )
                          <li>
                              {{$item}}
                          </li>
                      @endforeach
                  </ul>
                  </div>
            </div>
        @break

        @case('warning')
            <div role="alert"
                {{ $attributes->merge(['class' => 'p-4 mb-4 text-sm text-warning-800 rounded-lg bg-warning-50 dark:bg-gray-800 dark:text-warning-300']) }}>
                <div>
                    
                    <span class="font-medium">{{$title}}</span>
                    <ul class="mt-1.5 list-disc list-inside">
                      @foreach ( $list as $item )
                          <li>
                              {{$item}}
                          </li>
                      @endforeach
                  </ul>
                  </div>
            </div>
        @break

        @default
    @endswitch
@endif
