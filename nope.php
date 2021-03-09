try {
  if (window.kttmAdTypes && window.kttmAdTypes.length) {
    window.kttmAdTypes = window.kttmAdTypes.filter(function(a) {
      return a !== 'EasyList';
    });
  }
} catch (e) {}