#top-footer {
    background-repeat: repeat-x;
    background-position: center bottom;
    padding: 40px 15px;
    color: $headings-color;

    h3 {
        color: $brand-primary;
    }

    ul {
        list-style: none;
    }

    .contact ul li {
        font-size: 1.2rem;
        margin-bottom: 4px;

        i {
            margin-right: 3px;
            min-width: 20px;
        }

        a, i {
            display: inline-block;
            vertical-align: middle;
        }
    }

    .social {
        text-align: right;
        ul li {
            display: inline;

            a {
                text-decoration: none;
                color: #fff;

                &.facebook {
                    background-color: $m-facebook-color;
                    &:hover {
                        background-color: darken($m-facebook-color, 20%);
                    }
                }

                &.twitter {
                    background-color: $m-twitter-color;
                    &:hover {
                        background-color: darken($m-twitter-color, 20%);
                    }
                }

                &.linkedin {
                    background-color: $m-linkedin-color;
                    &:hover {
                        background-color: darken($m-linkedin-color, 20%);
                    }
                }

                &.youtube {
                    background-color: $m-youtube-color;
                    &:hover {
                        background-color: darken($m-youtube-color, 20%);
                    }
                }

                &.instagram {
                    background-color: $m-instagram-color;
                    &:hover {
                        background-color: darken($m-instagram-color, 20%);
                    }
                }

                &.whatsapp {
                    background-color: $m-whatsapp-color;
                    &:hover {
                        background-color: darken($m-whatsapp-color, 20%);
                    }
                }
            }
        }
    }

    .plugins_standard_footer_html {
        .mobilefooter a.btn {
            white-space: inherit;
        }
    }
}

#page-footer {
    height: 0 !important;
    visibility: hidden !important;
    background-color: $m-moodle-color;
    text-align: center;
    min-height: inherit;
    color: #fff;

    .madewithmoodle {
        margin-bottom: .5rem;
        p {
            text-transform: uppercase;
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 0;
            display: inline-block;
        }

        img {
            max-width: 100px;
            margin-top: -12px;
        }
    }
    .madeby {
        font-size: 14px;

        a {
            color: #fff;
        }

        p {
            margin-bottom: 0;
        }
    }
}

@include media-breakpoint-down(md) {
    #top-footer .social {
        text-align: left;

        .plugins_standard_footer_html {
            padding-left: 1rem;
        }
    }
}