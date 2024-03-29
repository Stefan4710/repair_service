import Vue from 'vue'
import Vuex from 'vuex'

import Alert from './modules/alert'
import I18NStore from './modules/i18n'

import PermissionsIndex from './cruds/Permissions'
import PermissionsSingle from './cruds/Permissions/single'
import RolesIndex from './cruds/Roles'
import RolesSingle from './cruds/Roles/single'
import UsersIndex from './cruds/Users'
import UsersSingle from './cruds/Users/single'
import ContactCompaniesIndex from './cruds/ContactCompanies'
import ContactCompaniesSingle from './cruds/ContactCompanies/single'
import ContactContactsIndex from './cruds/ContactContacts'
import ContactContactsSingle from './cruds/ContactContacts/single'
import BrandsIndex from './cruds/Brands'
import BrandsSingle from './cruds/Brands/single'
import DevicesIndex from './cruds/Devices'
import DevicesSingle from './cruds/Devices/single'
import DeviceComponentsIndex from './cruds/DeviceComponents'
import DeviceComponentsSingle from './cruds/DeviceComponents/single'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production'

export default new Vuex.Store({
  modules: {
    Alert,
    I18NStore,
    PermissionsIndex,
    PermissionsSingle,
    RolesIndex,
    RolesSingle,
    UsersIndex,
    UsersSingle,
    ContactCompaniesIndex,
    ContactCompaniesSingle,
    ContactContactsIndex,
    ContactContactsSingle,
    BrandsIndex,
    BrandsSingle,
    DevicesIndex,
    DevicesSingle,
    DeviceComponentsIndex,
    DeviceComponentsSingle
  },
  strict: debug
})
