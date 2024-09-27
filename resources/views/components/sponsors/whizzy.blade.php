@props([
    'footer' => false,
])

<a
    class="grid place-items-center transition duration-300 will-change-transform hover:scale-110 motion-reduce:transition-none motion-reduce:hover:transform-none min-[850px]:col-span-2"
    href="https://whizzy.dev/?utm_source=filament&utm_medium=referral&utm_campaign=partner&utm_content={{ $footer ? 'footer' : 'home' }}"
    target="_blank"
    title="Whizzy"
>
    <svg
        viewBox="0 0 356 96"
        @class([
            'fill-current',
            'h-5' => $footer,
            'h-9' => ! $footer,
        ])
    >
        <path
            d="M332.135 95.7968c-3.446 0-6.808-.452-10.085-1.3559-3.276-.904-6.355-2.4294-9.237-4.5763l3.983-9.4916c1.808 1.3559 3.87 2.4294 6.187 3.2203 2.316.8475 4.887 1.2712 7.712 1.2712 4.35 0 7.57-1.0169 9.661-3.0508 2.147-2.034 3.22-4.9718 3.22-8.8137v-2.3729c-.96 1.2995-2.175 2.3447-3.644 3.1357-1.412.7344-2.938 1.2712-4.576 1.6101-1.639.339-3.277.5085-4.916.5085-4.293 0-7.74-.9039-10.339-2.7119-2.599-1.8079-4.491-4.2655-5.678-7.3729-1.13-3.1639-1.695-6.7515-1.695-10.7628V30.5421h11.865v22.0341c0 1.4689.085 2.9378.254 4.4068.17 1.4689.565 2.8249 1.187 4.0678.621 1.243 1.553 2.2599 2.796 3.0509 1.243.7344 2.91 1.1017 5 1.1017 2.712 0 4.746-.6498 6.102-1.9492 1.356-1.3559 2.26-3.0509 2.712-5.0848.508-2.0339.763-4.1525.763-6.356V30.5421h11.864v38.2206c0 4.0678-.395 7.7684-1.186 11.1018-.735 3.3333-2.006 6.1865-3.814 8.5594-1.751 2.3729-4.124 4.1808-7.119 5.4237-2.938 1.2995-6.61 1.9492-11.017 1.9492ZM270.036 75.2034v-8.9831l22.034-25.0849h-22.034V30.5421h37.288v8.8984l-22.119 25.1696h22.119v10.5933h-37.288ZM229.378 75.2034v-8.9831l22.034-25.0849h-22.034V30.5421h37.288v8.8984l-22.119 25.1696h22.119v10.5933h-37.288ZM212.346 75.2034V30.5421h11.864v44.6613h-11.864Zm5.932-49.1529c-2.203 0-3.983-.6497-5.339-1.9491-1.356-1.356-2.034-3.0792-2.034-5.1696 0-2.2034.706-3.983 2.119-5.339 1.412-1.3559 3.192-2.0339 5.339-2.0339 1.977 0 3.672.678 5.084 2.0339 1.469 1.2995 2.204 3.0509 2.204 5.2543 0 2.1469-.706 3.8983-2.119 5.2543-1.356 1.2994-3.107 1.9491-5.254 1.9491ZM163.577 75.2034V15.203h11.864v20.5086c1.3-1.5254 2.74-2.7119 4.322-3.5593 1.639-.8475 3.277-1.4407 4.915-1.7797 1.695-.3955 3.249-.5932 4.662-.5932 4.18 0 7.457.9322 9.83 2.7966 2.373 1.8644 4.068 4.3786 5.085 7.5424 1.017 3.1639 1.525 6.6385 1.525 10.4238v24.6612h-11.864V52.2372c0-1.356-.141-2.7119-.424-4.0679-.226-1.3559-.65-2.5989-1.271-3.7288-.622-1.1865-1.497-2.1187-2.627-2.7966-1.13-.7345-2.627-1.1017-4.492-1.1017-1.751 0-3.248.3672-4.491 1.1017-1.243.7344-2.26 1.7231-3.051 2.9661-.735 1.1864-1.271 2.5141-1.61 3.9831-.339 1.4689-.509 2.9378-.509 4.4068v22.2035h-11.864ZM91.5502 75.2034 76.889 15.203h13.4747l10.5083 46.6952 10.594-46.6952h16.017l10.423 46.6952 10.255-46.6952h12.796l-14.491 60.0004h-16.78l-10.509-45.424-10.339 45.424H91.5502Z"
        />
        <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="m44.1899 10.3161 14.4217 59.0207c-7.9934 4.8279-17.364 7.606-27.3835 7.606-9.9609 0-19.2805-2.7457-27.2433-7.5216l14.4421-59.105c3.2948-13.48391 22.4682-13.48393 25.763-.0001Zm-9.3803 31.3912-3.5815-9.6789-3.5815 9.6789-9.679 3.5816 9.679 3.5815 3.5815 9.679 3.5815-9.679 9.679-3.5815-9.679-3.5816Z"
        />
        <path
            d="M31.2281 83.573c10.5354 0 20.4331-2.7303 29.0242-7.5219l1.6358 6.6946c-9.1497 4.7644-19.5501 7.4575-30.5795 7.4575-11.0295 0-21.42989-2.6931-30.579596-7.4576l1.616546-6.6157C10.9037 80.8726 20.7505 83.573 31.2281 83.573Z"
        />
    </svg>
</a>
