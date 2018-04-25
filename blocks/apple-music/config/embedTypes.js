// Internationalization function.
const { __ } = window.wp.i18n;
/**
 * The list of the embed types to use for embedding Apple Music.
 *
 * @type {Array}
 */
const embedTypes = [
  {
    value: 'preview-player',
    label: __('Preview Player', 'apple-music'),
  },
  {
    value: 'badge',
    label: __('Badge', 'apple-music'),
  },
  {
    value: 'text-lockup',
    label: __('Text Lockup', 'apple-music'),
    styles: [
      {
        value: 'standard-black',
        label: __('Standard Black', 'apple-news'),
      },
      {
        value: 'standard-white',
        label: __('Standard White', 'apple-news'),
      },
      {
        value: 'mono-white',
        label: __('Mono White', 'apple-news'),
      },
      {
        value: 'mono-black',
        label: __('Mono Black', 'apple-news'),
      },
    ],
  },
  {
    value: 'app-icon',
    label: __('App Icon', 'apple-music'),
    styles: [
      {
        label: __('Standard', 'apple-news'),
        hex: '',
      },
      {
        label: __('White', 'apple-news'),
        hex: 'FFFFFF',
      },
      {
        label: __('Black', 'apple-news'),
        hex: '000000',
      },
    ],
  },
];

export default embedTypes;
