import { SVGAttributes } from 'react';

export default function AppLogoIcon(props: SVGAttributes<SVGElement>) {
    return (
        <svg
            {...props}
            viewBox="0 0 40 42"
            fill="currentColor"
            xmlns="http://www.w3.org/2000/svg"
        >
            {/* Head Profile */}
            <path
                fillRule="evenodd"
                clipRule="evenodd"
                d="M20 6C10.0589 6 2 13.1634 2 22C2 25.1303 3.01254 28.0461 4.75544 30.4688L3 37L10.3708 34.321C13.2033 36.6373 16.4719 38 20 38C29.9411 38 38 30.8366 38 22C38 13.1634 29.9411 6 20 6Z"
            />
        </svg>
    );
}
