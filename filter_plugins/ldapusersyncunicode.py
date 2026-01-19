# ldapusersync unicode encoding #157

def unicodehex(string):
    r = ''
    for c in string:
        rc = c
        n = ord(c)
        if n > 127:
            rc = '&#x{};'.format(format(ord(c), 'X'))
        r += rc
    return r

class FilterModule(object):
    def filters(self):
        return {
            "unicodehex": unicodehex,
        }
