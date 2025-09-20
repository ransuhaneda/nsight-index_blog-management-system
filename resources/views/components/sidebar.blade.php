@props(['active' => ''])

<nav id="sidebar" class="sidebar">
  <ul>
    <li class="sidebar-header">
      <span class="logo">{{ config('app.name', 'Laravel') }}</span>

      <button onclick="toggleSidebar()" id="toggle-btn" class="sidebar-toggle">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="24px"
          viewBox="0 -960 960 960"
          width="24px"
        >
          <path
            d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"
          />
        </svg>
      </button>
    </li>

    <li class="{{ $active === 'dashboard' ? 'active' : '' }}">
      <a href="{{ route('dashboard') }}" class="sidebar-link">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="24px"
          viewBox="0 -960 960 960"
          width="24px"
        >
          <path
            d="M520-640v-160q0-17 11.5-28.5T560-840h240q17 0 28.5 11.5T840-800v160q0 17-11.5 28.5T800-600H560q-17 0-28.5-11.5T520-640ZM120-480v-320q0-17 11.5-28.5T160-840h240q17 0 28.5 11.5T440-800v320q0 17-11.5 28.5T400-440H160q-17 0-28.5-11.5T120-480Zm400 320v-320q0-17 11.5-28.5T560-520h240q17 0 28.5 11.5T840-480v320q0 17-11.5 28.5T800-120H560q-17 0-28.5-11.5T520-160Zm-400 0v-160q0-17 11.5-28.5T160-360h240q17 0 28.5 11.5T440-320v160q0 17-11.5 28.5T400-120H160q-17 0-28.5-11.5T120-160Zm80-360h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z"
          />
        </svg>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="{{ $active === 'calendar' ? 'active' : '' }}">
      <a href="#" class="sidebar-link">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="24px"
          viewBox="0 -960 960 960"
          width="24px"
        >
          <path
            d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-40q0-17 11.5-28.5T280-880q17 0 28.5 11.5T320-840v40h320v-40q0-17 11.5-28.5T680-880q17 0 28.5 11.5T720-840v40h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"
          />
        </svg>
        <span>Calendar</span>
      </a>
    </li>

    <li class="{{ $active === 'appointments' ? 'active' : '' }}">
      <a href="#" class="sidebar-link">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          height="24px"
          viewBox="0 0 24 24"
          width="24px"
        >
          <path
            d="M17 3h4c.5523 0 1 .4477 1 1v16c0 .5523-.4477 1-1 1H3c-.5523 0-1-.4477-1-1V4c0-.5523.4477-1 1-1h4V1h2v2h6V1h2v2ZM4 9v10h16V9H4Zm2 4h5v4H6v-4Z"
          />
        </svg>
        <span>Appointments</span>
      </a>
    </li>

    <li>
      <button onclick="toggleSubMenu(this)" class="dropdown-btn sidebar-link">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="24px"
          viewBox="0 -960 960 960"
          width="24px"
        >
          <path
            d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h207q16 0 30.5 6t25.5 17l57 57h320q33 0 56.5 23.5T880-640v400q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H447l-80-80H160v480Zm0 0v-480 480Zm400-160v40q0 17 11.5 28.5T600-320q17 0 28.5-11.5T640-360v-40h40q17 0 28.5-11.5T720-440q0-17-11.5-28.5T680-480h-40v-40q0-17-11.5-28.5T600-560q-17 0-28.5 11.5T560-520v40h-40q-17 0-28.5 11.5T480-440q0 17 11.5 28.5T520-400h40Z"
          />
        </svg>
        <span>Create</span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="24px"
          viewBox="0 -960 960 960"
          width="24px"
          class="dropdown-arrow"
        >
          <path
            d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"
          />
        </svg>
      </button>
      <ul class="sub-menu">
        <div>
          <li><a href="#" class="sidebar-link submenu-link">Folder</a></li>
          <li><a href="#" class="sidebar-link submenu-link">Document</a></li>
          <li><a href="#" class="sidebar-link submenu-link">Project</a></li>
        </div>
      </ul>
    </li>

    <li>
      <button onclick="toggleSubMenu(this)" class="dropdown-btn sidebar-link">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="24px"
          viewBox="0 -960 960 960"
          width="24px"
        >
          <path
            d="m221-313 142-142q12-12 28-11.5t28 12.5q11 12 11 28t-11 28L250-228q-12 12-28 12t-28-12l-86-86q-11-11-11-28t11-28q11-11 28-11t28 11l57 57Zm0-320 142-142q12-12 28-11.5t28 12.5q11 12 11 28t-11 28L250-548q-12 12-28 12t-28-12l-86-86q-11-11-11-28t11-28q11-11 28-11t28 11l57 57Zm339 353q-17 0-28.5-11.5T520-320q0-17 11.5-28.5T560-360h280q17 0 28.5 11.5T880-320q0 17-11.5 28.5T840-280H560Zm0-320q-17 0-28.5-11.5T520-640q0-17 11.5-28.5T560-680h280q17 0 28.5 11.5T880-640q0 17-11.5 28.5T840-600H560Z"
          />
        </svg>
        <span>Todo-Lists</span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="24px"
          viewBox="0 -960 960 960"
          width="24px"
          class="dropdown-arrow"
        >
          <path
            d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"
          />
        </svg>
      </button>
      <ul class="sub-menu">
        <div>
          <li><a href="#" class="sidebar-link submenu-link">Work</a></li>
          <li><a href="#" class="sidebar-link submenu-link">Private</a></li>
          <li><a href="#" class="sidebar-link submenu-link">Coding</a></li>
          <li><a href="#" class="sidebar-link submenu-link">Gardening</a></li>
          <li><a href="#" class="sidebar-link submenu-link">School</a></li>
        </div>
      </ul>
    </li>

    <li class="{{ $active === 'profile' ? 'active' : '' }}">
      <a href="{{ route('profile.edit') }}" class="sidebar-link">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 24 24"
          height="24px"
          width="24px"
        >
          <path
            d="M4 22c0-4.4183 3.5817-8 8-8s8 3.5817 8 8h-2c0-3.3137-2.6863-6-6-6s-6 2.6863-6 6H4Zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6Zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4Z"
          />
        </svg>
        <span>Profile</span>
      </a>
    </li>
    <li class="{{ $active === 'logout' ? 'active' : '' }}">
      <form method="POST" action="{{ route('logout') }}" class="">
        @csrf
        <button class="sidebar-signout" type="submit">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 24 24"
            height="24px"
            width="24px"
          >
            <path
              d="M4 18h2v2h12V4H6v2H4V3c0-.5523.4477-1 1-1h14c.5523 0 1 .4477 1 1v18c0 .5523-.4477 1-1 1H5c-.5523 0-1-.4477-1-1v-3Zm2-7h7v2H6v3l-5-4 5-4v3Z"
            />
          </svg>
          <span>Sign Out</span>
        </button>
      </form>
    </li>
  </ul>
</nav>

@push('scripts')
  <script>
    const sidebar = document.getElementById('sidebar')

    function toggleSidebar() {
      const toggleButton = document.getElementById('toggle-btn')

      sidebar.classList.toggle('close')
      toggleButton.classList.toggle('rotate')

      closeAllSubMenus()
    }

    function toggleSubMenu(button) {
      const subMenu = button.nextElementSibling

      if (!subMenu.classList.contains('show')) {
        closeAllSubMenus()
      }

      subMenu.classList.toggle('show')
      button.classList.toggle('rotate')

      if (sidebar.classList.contains('close')) {
        sidebar.classList.toggle('close')
        toggleButton.classList.toggle('rotate')
      }
    }

    function closeAllSubMenus() {
      Array.from(sidebar.getElementsByClassName('show')).forEach((ul) => {
        ul.classList.remove('show')
        ul.previousElementSibling.classList.remove('rotate')
      })
    }
  </script>
@endpush
