import './bootstrap';

import Alpine from 'alpinejs';
import * as dayjs from 'dayjs';
import relativeTime from 'dayjs/plugin/relativeTime';
import utc from 'dayjs/plugin/utc';
import timezone from 'dayjs/plugin/timezone';

dayjs.extend(relativeTime);
dayjs.extend(utc);
dayjs.extend(timezone);

window.dayjs = dayjs;
window.Alpine = Alpine;

Alpine.start();
