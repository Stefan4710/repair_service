import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const View = { template: '<router-view></router-view>' }

const routes = [
  {
    path: '/',
    component: () => import('@pages/Layout/DashboardLayout.vue'),
    redirect: 'dashboard',
    children: [
      {
        path: 'dashboard',
        name: 'dashboard',
        component: () => import('@pages/Dashboard.vue'),
        meta: { title: 'global.dashboard' }
      },
      {
        path: 'user-management',
        name: 'user_management',
        component: View,
        redirect: { name: 'permissions.index' },
        children: [
          {
            path: 'permissions',
            name: 'permissions.index',
            component: () => import('@cruds/Permissions/Index.vue'),
            meta: { title: 'cruds.permission.title' }
          },
          {
            path: 'permissions/create',
            name: 'permissions.create',
            component: () => import('@cruds/Permissions/Create.vue'),
            meta: { title: 'cruds.permission.title' }
          },
          {
            path: 'permissions/:id',
            name: 'permissions.show',
            component: () => import('@cruds/Permissions/Show.vue'),
            meta: { title: 'cruds.permission.title' }
          },
          {
            path: 'permissions/:id/edit',
            name: 'permissions.edit',
            component: () => import('@cruds/Permissions/Edit.vue'),
            meta: { title: 'cruds.permission.title' }
          },
          {
            path: 'roles',
            name: 'roles.index',
            component: () => import('@cruds/Roles/Index.vue'),
            meta: { title: 'cruds.role.title' }
          },
          {
            path: 'roles/create',
            name: 'roles.create',
            component: () => import('@cruds/Roles/Create.vue'),
            meta: { title: 'cruds.role.title' }
          },
          {
            path: 'roles/:id',
            name: 'roles.show',
            component: () => import('@cruds/Roles/Show.vue'),
            meta: { title: 'cruds.role.title' }
          },
          {
            path: 'roles/:id/edit',
            name: 'roles.edit',
            component: () => import('@cruds/Roles/Edit.vue'),
            meta: { title: 'cruds.role.title' }
          },
          {
            path: 'users',
            name: 'users.index',
            component: () => import('@cruds/Users/Index.vue'),
            meta: { title: 'cruds.user.title' }
          },
          {
            path: 'users/create',
            name: 'users.create',
            component: () => import('@cruds/Users/Create.vue'),
            meta: { title: 'cruds.user.title' }
          },
          {
            path: 'users/:id',
            name: 'users.show',
            component: () => import('@cruds/Users/Show.vue'),
            meta: { title: 'cruds.user.title' }
          },
          {
            path: 'users/:id/edit',
            name: 'users.edit',
            component: () => import('@cruds/Users/Edit.vue'),
            meta: { title: 'cruds.user.title' }
          }
        ]
      },
      {
        path: 'contact-management',
        name: 'contact_management',
        component: View,
        redirect: { name: 'contact_companies.index' },
        children: [
          {
            path: 'contact-companies',
            name: 'contact_companies.index',
            component: () => import('@cruds/ContactCompanies/Index.vue'),
            meta: { title: 'cruds.contactCompany.title' }
          },
          {
            path: 'contact-companies/create',
            name: 'contact_companies.create',
            component: () => import('@cruds/ContactCompanies/Create.vue'),
            meta: { title: 'cruds.contactCompany.title' }
          },
          {
            path: 'contact-companies/:id',
            name: 'contact_companies.show',
            component: () => import('@cruds/ContactCompanies/Show.vue'),
            meta: { title: 'cruds.contactCompany.title' }
          },
          {
            path: 'contact-companies/:id/edit',
            name: 'contact_companies.edit',
            component: () => import('@cruds/ContactCompanies/Edit.vue'),
            meta: { title: 'cruds.contactCompany.title' }
          },
          {
            path: 'contact-contacts',
            name: 'contact_contacts.index',
            component: () => import('@cruds/ContactContacts/Index.vue'),
            meta: { title: 'cruds.contactContact.title' }
          },
          {
            path: 'contact-contacts/create',
            name: 'contact_contacts.create',
            component: () => import('@cruds/ContactContacts/Create.vue'),
            meta: { title: 'cruds.contactContact.title' }
          },
          {
            path: 'contact-contacts/:id',
            name: 'contact_contacts.show',
            component: () => import('@cruds/ContactContacts/Show.vue'),
            meta: { title: 'cruds.contactContact.title' }
          },
          {
            path: 'contact-contacts/:id/edit',
            name: 'contact_contacts.edit',
            component: () => import('@cruds/ContactContacts/Edit.vue'),
            meta: { title: 'cruds.contactContact.title' }
          }
        ]
      },
      {
        path: 'device-management',
        name: 'device_management',
        component: View,
        redirect: { name: 'brands.index' },
        children: [
          {
            path: 'brands',
            name: 'brands.index',
            component: () => import('@cruds/Brands/Index.vue'),
            meta: { title: 'cruds.brand.title' }
          },
          {
            path: 'brands/create',
            name: 'brands.create',
            component: () => import('@cruds/Brands/Create.vue'),
            meta: { title: 'cruds.brand.title' }
          },
          {
            path: 'brands/:id',
            name: 'brands.show',
            component: () => import('@cruds/Brands/Show.vue'),
            meta: { title: 'cruds.brand.title' }
          },
          {
            path: 'brands/:id/edit',
            name: 'brands.edit',
            component: () => import('@cruds/Brands/Edit.vue'),
            meta: { title: 'cruds.brand.title' }
          },
          {
            path: 'devices',
            name: 'devices.index',
            component: () => import('@cruds/Devices/Index.vue'),
            meta: { title: 'cruds.device.title' }
          },
          {
            path: 'devices/create',
            name: 'devices.create',
            component: () => import('@cruds/Devices/Create.vue'),
            meta: { title: 'cruds.device.title' }
          },
          {
            path: 'devices/:id',
            name: 'devices.show',
            component: () => import('@cruds/Devices/Show.vue'),
            meta: { title: 'cruds.device.title' }
          },
          {
            path: 'devices/:id/edit',
            name: 'devices.edit',
            component: () => import('@cruds/Devices/Edit.vue'),
            meta: { title: 'cruds.device.title' }
          },
          {
            path: 'device-components',
            name: 'device_components.index',
            component: () => import('@cruds/DeviceComponents/Index.vue'),
            meta: { title: 'cruds.deviceComponent.title' }
          },
          {
            path: 'device-components/create',
            name: 'device_components.create',
            component: () => import('@cruds/DeviceComponents/Create.vue'),
            meta: { title: 'cruds.deviceComponent.title' }
          },
          {
            path: 'device-components/:id',
            name: 'device_components.show',
            component: () => import('@cruds/DeviceComponents/Show.vue'),
            meta: { title: 'cruds.deviceComponent.title' }
          },
          {
            path: 'device-components/:id/edit',
            name: 'device_components.edit',
            component: () => import('@cruds/DeviceComponents/Edit.vue'),
            meta: { title: 'cruds.deviceComponent.title' }
          }
        ]
      }
    ]
  }
]

export default new VueRouter({
  mode: 'history',
  base: '/admin',
  routes
})
